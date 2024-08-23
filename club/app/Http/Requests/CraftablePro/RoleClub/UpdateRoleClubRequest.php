<?php
namespace App\Http\Requests\CraftablePro\RoleClub;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateRoleClubRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.role-club.edit");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'info_users_id' => ['sometimes','exists:info_users,id'],
            'club_id' => ['sometimes','exists:club,id'],
            'sub_role_id' => ['sometimes','exists:sub_role,id'],
        ];
    }
}
