<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
    public function rules(Request $request)
    {
        $item_id=!empty($request['item_id'])?','.$request['item_id']:'';

        return [
            'title' => 'required',
            'url' => 'required|unique:products,url'.$item_id,
            'description_list' => 'required',
            'description_grid' => 'required',
            'price' => 'required|numeric',
            'image'=>'image',
            'image_big'=>'image',
        ];
    }
}
