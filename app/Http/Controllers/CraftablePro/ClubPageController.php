<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\ClubPage;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\ClubPage\IndexClubPageRequest;
use App\Http\Requests\CraftablePro\ClubPage\CreateClubPageRequest;
use App\Http\Requests\CraftablePro\ClubPage\StoreClubPageRequest;
use App\Http\Requests\CraftablePro\ClubPage\EditClubPageRequest;
use App\Http\Requests\CraftablePro\ClubPage\UpdateClubPageRequest;
use App\Http\Requests\CraftablePro\ClubPage\DestroyClubPageRequest;
use App\Http\Requests\CraftablePro\ClubPage\BulkDestroyClubPageRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ClubPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexClubPageRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $clubPagesQuery = QueryBuilder::for(ClubPage::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','title','content'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','title','content');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($clubPagesQuery->select(['id'])->pluck('id'));
        }

        $clubPages = $clubPagesQuery
            ->select('id','title','content')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('clubPages_url', $request->fullUrl());

        return Inertia::render('ClubPage/Index', [
            'clubPages' => $clubPages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateClubPageRequest $request): Response
    {
        return Inertia::render('ClubPage/Create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClubPageRequest $request): RedirectResponse
    {
        $clubPage = ClubPage::create($request->validated());

        return redirect()->route('craftable-pro.club-pages.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditClubPageRequest $request, ClubPage $clubPage): Response
    {
        $clubPage->load('media');

        return Inertia::render('ClubPage/Edit', [
            'clubPage' => $clubPage,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClubPageRequest $request, ClubPage $clubPage): RedirectResponse
    {
        $clubPage->update($request->validated());

        if (session('clubPages_url')) {
            return redirect(session('clubPages_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.club-pages.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyClubPageRequest $request, ClubPage $clubPage): RedirectResponse
    {
        $clubPage->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroyClubPageRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    ClubPage::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                ClubPage::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
