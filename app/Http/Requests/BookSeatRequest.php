<?php

namespace App\Http\Requests;


class BookSeatRequest extends BaseFormRequest
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
            'to' => 'required|int|exists:cities,city_id',
            'tripId' => 'required|int|exists:trips,trip_id',
            'seatId' => 'required|int|exists:bus_seats,seat_id'
        ];
    }
}
