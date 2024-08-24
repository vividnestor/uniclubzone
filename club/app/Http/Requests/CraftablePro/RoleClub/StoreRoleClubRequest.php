<?php
namespace App\Http\Requests\CraftablePro\RoleClub;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreRoleClubRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.role-club.create");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'info_users_id' => ['required','exists:info_users,id'],
            'club_id' => ['required','exists:club,id'],
            'sub_role_id' => ['required','exists:sub_role,id'],
        ];
    }
}
