<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShopRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

                'shop_name' => 'required',
                'owner_name' => 'required',
                'shop_image' => 'nullable',
                'opening_timing' => 'required',
                'closing_timing'=> 'required',
        ];
    }
}
