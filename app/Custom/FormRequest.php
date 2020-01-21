<?php


namespace App\Custom;
use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest as OriginalFormRequest;

class FormRequest extends OriginalFormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw (new ApiException("Invalid Parameters", 400))
            ->setErrors($validator->errors()->toArray());
    }
}
