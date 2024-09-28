<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\RoleClub;
use \App\Models\InfoUser;
use \App\Models\Club;
use \App\Models\SubRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\RoleClub\IndexRoleClubRequest;
use App\Http\Requests\CraftablePro\RoleClub\CreateRoleClubRequest;
use App\Http\Requests\CraftablePro\RoleClub\StoreRoleClubRequest;
use App\Http\Requests\CraftablePro\RoleClub\EditRoleClubRequest;
use App\Http\Requests\CraftablePro\RoleClub\UpdateRoleClubRequest;
use App\Http\Requests\CraftablePro\RoleClub\DestroyRoleClubRequest;
use App\Http\Requests\CraftablePro\RoleClub\BulkDestroyRoleClubRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class RoleClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexRoleClubRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $roleClubsQuery = QueryBuilder::for(RoleClub::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','info_users_id','club_id','sub_role_id'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','info_users_id','club_id','sub_role_id');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($roleClubsQuery->select(['id'])->pluck('id'));
        }

        $roleClubs = $roleClubsQuery
            ->with('infoUser', 'club', 'subRole')
            ->select('id','info_users_id','club_id','sub_role_id')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('roleClubs_url', $request->fullUrl());
        return Inertia::render('RoleClub/Index', [
            'roleClubs' => $roleClubs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateRoleClubRequest $request): Response
    {
        return Inertia::render('RoleClub/Create', [
            'infoUserOptions' => InfoUser::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->username]),
'clubOptions' => Club::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
'subRoleOptions' => SubRole::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleClubRequest $request): RedirectResponse
    {
        $roleClub = RoleClub::create($request->validated());

        return redirect()->route('craftable-pro.role-clubs.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditRoleClubRequest $request, RoleClub $roleClub): Response
    {
        return Inertia::render('RoleClub/Edit', [
            'roleClub' => $roleClub,
            'infoUserOptions' => InfoUser::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->username]),
'clubOptions' => Club::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
'subRoleOptions' => SubRole::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleClubRequest $request, RoleClub $roleClub): RedirectResponse
    {
        $roleClub->update($request->validated());

        if (session('roleClubs_url')) {
            return redirect(session('roleClubs_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.role-clubs.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyRoleClubRequest $request, RoleClub $roleClub): RedirectResponse
    {
        $roleClub->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroyRoleClubRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    RoleClub::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                RoleClub::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
