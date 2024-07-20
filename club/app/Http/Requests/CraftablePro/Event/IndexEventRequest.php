<?php
namespace App\Http\Requests\CraftablePro\Event;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexEventRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return Gate::allows("craftable-pro.event.index");
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'search' => ['sometimes','string'],
            'per_page' => ['sometimes','integer'],
            'bulk_select_all' => ['sometimes','boolean'],
        ];
    }
}
