<?php
namespace App\Http\Requests\CraftablePro\Club;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateClubRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.club.edit");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'name' => ['sometimes','string'],
            'description' => ['sometimes','string'],
            'active' => ['sometimes','boolean'],
            'delete_flag' => ['sometimes','boolean'],
            'published_at' => ['nullable'],
            'craftable_pro_users_id' => ['sometimes','exists:craftable_pro_users,id'],
        ];
    }
}
