<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\InfoUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\InfoUser\IndexInfoUserRequest;
use App\Http\Requests\CraftablePro\InfoUser\CreateInfoUserRequest;
use App\Http\Requests\CraftablePro\InfoUser\StoreInfoUserRequest;
use App\Http\Requests\CraftablePro\InfoUser\EditInfoUserRequest;
use App\Http\Requests\CraftablePro\InfoUser\UpdateInfoUserRequest;
use App\Http\Requests\CraftablePro\InfoUser\DestroyInfoUserRequest;
use App\Http\Requests\CraftablePro\InfoUser\BulkDestroyInfoUserRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class InfoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexInfoUserRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $infoUsersQuery = QueryBuilder::for(InfoUser::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','username','gender','department','year','phone','craftable_pro_users_id'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','username','gender','department','year','phone','craftable_pro_users_id');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($infoUsersQuery->select(['id'])->pluck('id'));
        }

        $infoUsers = $infoUsersQuery
            ->select('id','username','gender','department','year','phone','craftable_pro_users_id')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('infoUsers_url', $request->fullUrl());
        return Inertia::render('InfoUser/Index', [
            'infoUsers' => $infoUsers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateInfoUserRequest $request): Response
    {   
        return Inertia::render('InfoUser/Create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInfoUserRequest $request): RedirectResponse
    {
        $infoUser = InfoUser::create($request->validated());

        return redirect()->route('craftable-pro.craftable-pro-users.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditInfoUserRequest $request, InfoUser $infoUser): Response
    {
        return Inertia::render('InfoUser/Edit', [
            'infoUser' => $infoUser,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfoUserRequest $request, InfoUser $infoUser): RedirectResponse
    {
        $infoUser->update($request->validated());

        if (session('infoUsers_url')) {
            return redirect(session('infoUsers_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.info-users.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyInfoUserRequest $request, InfoUser $infoUser): RedirectResponse
    {
        $infoUser->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroyInfoUserRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    InfoUser::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                InfoUser::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
