<?php

namespace Modules\Shop\App\Requests\Filter;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:250|unique:shop_filters,name',
            'attributes.*.name' => 'required|string',
            'attributes.*.type' => 'required|string',
            'attributes.*.attribute_id' => 'required',
        ];
    }
}
