<?php
namespace App\Http\Requests\CraftablePro\InfoUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateInfoUserRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.info-user.edit");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'gender' => ['sometimes','string'],
            'department' => ['sometimes','string'],
            'year' => ['sometimes','string'],
            'phone' => ['sometimes','string'],
            'craftable_pro_users_id' => ['sometimes','string'],
        ];
    }
}
