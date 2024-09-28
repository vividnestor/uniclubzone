<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\SubRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\SubRole\IndexSubRoleRequest;
use App\Http\Requests\CraftablePro\SubRole\CreateSubRoleRequest;
use App\Http\Requests\CraftablePro\SubRole\StoreSubRoleRequest;
use App\Http\Requests\CraftablePro\SubRole\EditSubRoleRequest;
use App\Http\Requests\CraftablePro\SubRole\UpdateSubRoleRequest;
use App\Http\Requests\CraftablePro\SubRole\DestroySubRoleRequest;
use App\Http\Requests\CraftablePro\SubRole\BulkDestroySubRoleRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class SubRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexSubRoleRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $subRolesQuery = QueryBuilder::for(SubRole::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','name'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','name');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($subRolesQuery->select(['id'])->pluck('id'));
        }

        $subRoles = $subRolesQuery
            ->select('id','name')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('subRoles_url', $request->fullUrl());

        return Inertia::render('SubRole/Index', [
            'subRoles' => $subRoles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateSubRoleRequest $request): Response
    {
        return Inertia::render('SubRole/Create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubRoleRequest $request): RedirectResponse
    {
        $subRole = SubRole::create($request->validated());

        return redirect()->route('craftable-pro.sub-roles.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditSubRoleRequest $request, SubRole $subRole): Response
    {
        return Inertia::render('SubRole/Edit', [
            'subRole' => $subRole,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubRoleRequest $request, SubRole $subRole): RedirectResponse
    {
        $subRole->update($request->validated());

        if (session('subRoles_url')) {
            return redirect(session('subRoles_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.sub-roles.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroySubRoleRequest $request, SubRole $subRole): RedirectResponse
    {
        $subRole->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroySubRoleRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    SubRole::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                SubRole::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
