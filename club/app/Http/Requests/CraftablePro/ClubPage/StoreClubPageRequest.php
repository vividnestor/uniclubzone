<?php
namespace App\Http\Requests\CraftablePro\ClubPage;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreClubPageRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.club-page.create");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'title' => ['required','string'],
            'content' => ['required'],
            'slug' => ['required','string'],
            'published_at' => ['nullable'],
            'craftable_pro_users_id' => ['required'],
            'club_id' => ['required'],
        ];
    }
}
