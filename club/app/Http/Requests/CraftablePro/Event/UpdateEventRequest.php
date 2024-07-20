<?php
namespace App\Http\Requests\CraftablePro\Event;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateEventRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.event.edit");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'title' => ['sometimes','string'],
            'content' => ['sometimes'],
            'slug' => ['sometimes','string'],
            'published_at' => ['nullable'],
            'club_id' => ['sometimes','exists:club,id'],
            'category_id' => ['sometimes','exists:category,id'],
        ];
    }
}
