<?php
namespace App\Http\Requests\CraftablePro\Event;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreEventRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.event.create");
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
            'club_id' => ['required','exists:club,id'],
            'category_id' => ['required','exists:category,id'],
        ];
    }
}
