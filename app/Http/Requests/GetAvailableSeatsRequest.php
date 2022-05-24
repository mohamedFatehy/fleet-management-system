<?php

namespace App\Http\Requests;


class GetAvailableSeatsRequest extends BaseFormRequest
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
            'from' => 'required|int|exists:cities,city_id',
            'to' => 'required|int|exists:cities,city_id'
        ];
    }
}
