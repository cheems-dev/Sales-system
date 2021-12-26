<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $product = $this->route()->parameter('product');
        $rules =  [
            'name' => 'required',
            'slug' => 'required|unique:products',
            'brand' => 'required',
            'body' => 'required',
            'stock' => 'required',
            'extract' => 'required',
            'price' => 'required',
            'file' => 'image'
        ];
        /* ,slug,' . $product->id */
        if ($product) {
            $rules['slug'] =  'required|unique:products,slug,' . $product->id;
        }

        return $rules;
    }
}
