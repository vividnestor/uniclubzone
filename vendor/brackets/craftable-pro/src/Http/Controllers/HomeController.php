<?php

namespace Brackets\CraftablePro\Http\Controllers;

use Brackets\CraftablePro\Settings\GeneralSettings;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Club;
use App\Http\Controllers\Controller;
use Brackets\CraftablePro\Queries\Filters\FuzzyFilter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Brackets\CraftablePro\Queries\Sorts\SortNullsLast;
use Laravel\Fortify\Fortify;
use Spatie\Permission\Models\Role;
use Spatie\QueryBuilder\AllowedSort;

class HomeController extends Controller
{
    /**
     * Display the login view.
     *
     */
    public function index()
    {
        return redirect(app(GeneralSettings::class)->default_route);
    }

    public function dashboard(): Response | JsonResponse
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
        // dd($club);
        $media = DB::table('media')->where('model_type', 'App\Models\Club')->get();
        // dd($club);
        $role=DB::table('roles')->get();
        // dd($media);
        $infoUsers = DB::table('info_users')->get();
        $userStatus= DB::table('craftable_pro_users')->get();
        // dd($userStatus);
        $UserClub=DB::table('role_club')->get();
        return Inertia::render('Home', [
            'craftableProUsers' => $craftableProUsers,
            'filterOptions' => [
                'roles' => $roles->map->only(['id', 'name']),
            ],
            'club' => $club,
            'role'=>$role,
            'media'=>$media,
            'infoUsers'=>$infoUsers,
            'userStatus'=>$userStatus,
            'UserClub'=>$UserClub
        ]);
    }
}
