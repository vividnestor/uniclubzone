<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\Category\IndexCategoryRequest;
use App\Http\Requests\CraftablePro\Category\CreateCategoryRequest;
use App\Http\Requests\CraftablePro\Category\StoreCategoryRequest;
use App\Http\Requests\CraftablePro\Category\EditCategoryRequest;
use App\Http\Requests\CraftablePro\Category\UpdateCategoryRequest;
use App\Http\Requests\CraftablePro\Category\DestroyCategoryRequest;
use App\Http\Requests\CraftablePro\Category\BulkDestroyCategoryRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexCategoryRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $categoriesQuery = QueryBuilder::for(Category::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','name','description'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','name','description');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($categoriesQuery->select(['id'])->pluck('id'));
        }

        $categories = $categoriesQuery
            ->select('id','name','description')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('categories_url', $request->fullUrl());

        return Inertia::render('Category/Index', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateCategoryRequest $request): Response
    {
        return Inertia::render('Category/Create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $category = Category::create($request->validated());

        return redirect()->route('craftable-pro.categories.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditCategoryRequest $request, Category $category): Response
    {
        return Inertia::render('Category/Edit', [
            'category' => $category,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->validated());

        if (session('categories_url')) {
            return redirect(session('categories_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.categories.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyCategoryRequest $request, Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroyCategoryRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    Category::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                Category::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
