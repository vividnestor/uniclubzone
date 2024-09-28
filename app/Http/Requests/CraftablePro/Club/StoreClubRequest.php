<?php
namespace App\Http\Requests\CraftablePro\Club;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreClubRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.club.create");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'name' => ['required','string'],
            'description' => ['required','string'],
            'active' => ['required','boolean'],
            'delete_flag' => ['required','boolean'],
            'published_at' => ['nullable'],
            'craftable_pro_users_id' => ['required','exists:craftable_pro_users,id'],
        ];
    }
}
