<?php
namespace App\Http\Controllers\CraftablePro;

use App\Http\Controllers\Controller;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Brackets\CraftablePro\Queries\Sorts\SortNullsLast;
use Laravel\Fortify\Fortify;
use Spatie\Permission\Models\Role;
use Spatie\QueryBuilder\AllowedSort;

class Applications extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response | JsonResponse
    {
        $craftableProUsersQuery = QueryBuilder::for(config('craftable-pro.craftable_pro_user_model'))
            ->allowedFilters([
                AllowedFilter::custom('search', new FuzzyFilter(
                    'id',
                    'first_name',
                    'last_name',
                    'email',
                    'email_verified_at'
                )),
            ])
            ->defaultSort('id')
            ->allowedSorts(['id', 'first_name', 'email', 'email_verified_at', AllowedSort::custom('last_active_at', new SortNullsLast())]);

        $craftableProUsers = $craftableProUsersQuery
            ->with('roles')
            ->select(['id', 'first_name', 'last_name', 'email', 'email_verified_at', 'active', 'last_active_at', 'two_factor_secret', 'two_factor_confirmed_at'])
            ->paginate(request()->get('per_page'))
            ->withQueryString();
        
        $roles = Role::all();
        $club=DB::table('club')->get();
        $users=DB::table('craftable_pro_users')->get();
        return Inertia::render('Applications/Index', [
            'craftableProUsers' => $craftableProUsers,
            'filterOptions' => [
                'roles' => $roles->map->only(['id', 'name']),
            ],
            'users'=>$users,
            'club'=>$club
        ]);
    }
    
}
