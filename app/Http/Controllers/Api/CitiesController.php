<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Services\CitiesServiceInterface;
use Illuminate\Http\Request;


class CitiesController extends ApiController
{

    private CitiesServiceInterface $citiesService;

    public function __construct(CitiesServiceInterface $citiesService)
    {
        $this->citiesService = $citiesService;
    }

    public function get(Request $request)
    {
        $cities = $this->citiesService->getAll();
        return $this->handleResponse($cities);
    }
}
