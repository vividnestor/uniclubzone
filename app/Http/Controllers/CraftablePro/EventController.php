<?php
namespace App\Http\Controllers\CraftablePro;

use App\Models\Event;
use \App\Models\Category;
use \App\Models\Club;
use App\Http\Controllers\Controller;
use App\Http\Requests\CraftablePro\Event\IndexEventRequest;
use App\Http\Requests\CraftablePro\Event\CreateEventRequest;
use App\Http\Requests\CraftablePro\Event\StoreEventRequest;
use App\Http\Requests\CraftablePro\Event\EditEventRequest;
use App\Http\Requests\CraftablePro\Event\UpdateEventRequest;
use App\Http\Requests\CraftablePro\Event\DestroyEventRequest;
use App\Http\Requests\CraftablePro\Event\BulkDestroyEventRequest;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexEventRequest $request): Response | JsonResponse | RedirectResponse
    {
        $defaultSort = "id";

        if (!$request->has('sort')) {
            return redirect()->route($request->route()->getName(), ['sort' => $defaultSort]);
        }

        $eventsQuery = QueryBuilder::for(Event::class)
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id','title','content','slug','published_at','club_id','category_id'
                )),
            ])
            ->defaultSort($defaultSort)
            ->allowedSorts('id','title','content','slug','published_at','club_id','category_id');

        if ($request->wantsJson() && $request->get('bulk_select_all')) {
            return response()->json($eventsQuery->select(['id'])->pluck('id'));
        }

        $events = $eventsQuery
            ->with('category', 'club')
            ->select('id','title','content','slug','published_at','club_id','category_id')
            ->paginate($request->get('per_page'))->withQueryString();

        Session::put('events_url', $request->fullUrl());

        return Inertia::render('Event/Index', [
            'events' => $events,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateEventRequest $request): Response
    {
        return Inertia::render('Event/Create', [
            'categoryOptions' => Category::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
'clubOptions' => Club::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request): RedirectResponse
    {
        $event = Event::create($request->validated());

        return redirect()->route('craftable-pro.events.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditEventRequest $request, Event $event): Response
    {
        $event->load('media');

        return Inertia::render('Event/Edit', [
            'event' => $event,
            'categoryOptions' => Category::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
'clubOptions' => Club::all()->map(fn ($model) => ['value' => $model->id, 'label' => $model->name]),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event): RedirectResponse
    {
        $event->update($request->validated());

        if (session('events_url')) {
            return redirect(session('events_url'))->with(['message' => ___('craftable-pro', 'Operation successful')]);
        }

        return redirect()->route('craftable-pro.events.index')->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyEventRequest $request, Event $event): RedirectResponse
    {
        $event->delete();

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

    /**
     * Bulk destroy resource.
     */
    public function bulkDestroy(BulkDestroyEventRequest $request): RedirectResponse
    {
        // Mass delete of resource
        DB::transaction(function () use ($request) {
            collect($request->validated()['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    Event::whereIn('id', $bulkChunk)->delete();
                });
        });

        // Individual delete of resource items
        //        DB::transaction(function () use ($request) {
        //            collect($request->validated()['ids'])->each(function ($id) {
        //                Event::find($id)->delete();
        //            });
        //        });

        return redirect()->back()->with(['message' => ___('craftable-pro', 'Operation successful')]);
    }

}
