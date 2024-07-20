<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\Club;
use \Brackets\CraftablePro\Models\CraftableProUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\Club\IndexClubRequest;
use App\Http\Requests\CraftablePro\Club\CreateClubRequest;
use App\Http\Requests\CraftablePro\Club\StoreClubRequest;
use App\Http\Requests\CraftablePro\Club\EditClubRequest;
use App\Http\Requests\CraftablePro\Club\UpdateClubRequest;
use App\Http\Requests\CraftablePro\Club\DestroyClubRequest;
use App\Http\Requests\CraftablePro\Club\BulkDestroyClubRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexClubRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $clubsQuery = QueryBuilder::for(Club::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','name','description','active','delete_flag','published_at','craftable_pro_users_id'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','name','description','active','delete_flag','published_at','craftable_pro_users_id');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($clubsQuery->select(['id'])->pluck('id'));
        }

        $clubs = $clubsQuery
            ->with('craftableProUser')
            ->select('id','name','description','active','delete_flag','published_at','craftable_pro_users_id')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('clubs_url', $request->fullUrl());

        return Inertia::render('Club/Index', [
            'clubs' => $clubs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateClubRequest $request): Response
    {
        return Inertia::render('Club/Create', [
            'craftableProUserOptions' => CraftableProUser::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->email]),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClubRequest $request): RedirectResponse
    {
        $club = Club::create($request->validated());

        return redirect()->route('craftable-pro.clubs.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditClubRequest $request, Club $club): Response
    {
        $club->load('media');

        return Inertia::render('Club/Edit', [
            'club' => $club,
            'craftableProUserOptions' => CraftableProUser::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->email]),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClubRequest $request, Club $club): RedirectResponse
    {
        $club->update($request->validated());

        if (session('clubs_url')) {
            return redirect(session('clubs_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.clubs.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyClubRequest $request, Club $club): RedirectResponse
    {
        $club->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroyClubRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    Club::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                Club::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
