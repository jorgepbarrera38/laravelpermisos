<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validateIfStore = $this->routeIs('products.update') ? ', ' . $this->route('product')->id : '';
        return [
            'name' => 'required|max:40|unique:products,name' . $validateIfStore
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre'
        ];
    }
}
