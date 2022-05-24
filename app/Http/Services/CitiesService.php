<?php

namespace App\Http\Services;

use App\Http\Repositories\CitiesRepositoryInterface;
use Illuminate\Support\Collection;

class CitiesService implements CitiesServiceInterface
{
    private CitiesRepositoryInterface $citiesRepository;

    public function __construct(CitiesRepositoryInterface $citiesRepository)
    {
        $this->citiesRepository = $citiesRepository;
    }

    public function getAll(): Collection
    {
        return $this->citiesRepository->get();
    }
}
