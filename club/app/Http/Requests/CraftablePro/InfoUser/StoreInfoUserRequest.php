<?php
namespace App\Http\Requests\CraftablePro\InfoUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreInfoUserRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.info-user.create");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'username' => ['required','string'],
            'gender' => ['required','string'],
            'department' => ['required','string'],
            'year' => ['required','string'],
            'phone' => ['required','string'],
            'craftable_pro_users_id' => ['required','string'],
        ];
    }
}
