<?php


namespace App\Http\Requests;


use App\Exceptions\CustomValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class BaseFormRequest
 * @package App\Http\Requests
 */
abstract class BaseFormRequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw new CustomValidationException(json_encode($validator->errors()->all()));
    }
}
