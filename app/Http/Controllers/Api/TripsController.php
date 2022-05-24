<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Http\Requests\GetAvailableSeatsRequest;
use App\Http\Services\TripServiceInterface;
use Illuminate\Http\JsonResponse;

class TripsController extends ApiController
{
    private TripServiceInterface $tripService;

    public function __construct(TripServiceInterface $tripService)
    {
        $this->tripService = $tripService;
    }

    /**
     * @param GetAvailableSeatsRequest $request
     * @return JsonResponse
     */
    public function getAvailableTrips(GetAvailableSeatsRequest $request): JsonResponse
    {
        $trips = $this->tripService->getAvailableTrips($request);
        return $this->handleResponse($trips);
    }
}
