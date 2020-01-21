<?php

namespace App\Http\Requests;

use App\Custom\FormRequest;

class UpdateItemRequest extends FormRequest
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
        return [
            'id' => ['required', 'exists:items'],
            'item' => ['string', 'max:200'],
            'isCompleted' => ['boolean'],
        ];
    }
}
