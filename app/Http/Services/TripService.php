<?php

namespace App\Http\Services;


use App\Http\Repositories\ReservationRepositoryInterface;
use App\Http\Repositories\TripRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TripService implements TripServiceInterface
{
    private TripRepositoryInterface $tripRepository;
    private ReservationRepositoryInterface $reservationRepository;

    /**
     * @param TripRepositoryInterface $tripRepository
     * @param ReservationRepositoryInterface $reservationRepository
     */
    public function __construct(TripRepositoryInterface $tripRepository, ReservationRepositoryInterface $reservationRepository)
    {
        $this->tripRepository = $tripRepository;
        $this->reservationRepository = $reservationRepository;
    }

    /**
     * @param Request $request
     * @return Collection
     */
    public function getAvailableTrips(Request $request): Collection
    {
        $trips = $this->tripRepository->getAvailableTripsByCities($request->get('from'), $request->get('to'));

        foreach ($trips as $trip) {
            $updatedSeats = [];
            foreach ($trip->seats as $seat) {
                // compare them against the all seats;
                if ($this->isSeatAvailable($trip, $seat->seat_id, $request->only(['from', 'to']))) {
                    $updatedSeats[] = $seat->toArray();
                }
            }
            unset($trip->seats);
            $trip->seats = $updatedSeats;
        }

        return $trips;
    }


    /**
     * @param object $trip
     * @param int $seatId
     * @param array $desiredRoute
     * @return bool
     */
    private function isSeatAvailable(object $trip, int $seatId, array $desiredRoute): bool
    {
        $occupiedCitiesInThisSeat = $this->reservationRepository->getTripReservations($trip->trip_id, $seatId);

        if (count($occupiedCitiesInThisSeat) === 0) {
            return true;
        }

        foreach ($occupiedCitiesInThisSeat as $occupiedCity) {
            $reservedSlot = false;
            $wantedSlot = false;
            foreach ($trip->crossovers as $city) {
                if ($city->city_id == $occupiedCity->from_city) $reservedSlot = true;
                if ($city->city_id == $occupiedCity->to_city) $reservedSlot = false;
                if ($city->city_id == $desiredRoute['from']) $wantedSlot = true;
                if ($city->city_id == $desiredRoute['to']) $wantedSlot = false;

                if ($reservedSlot && $wantedSlot) {
                    return false;
                }
            }
        }
        return true;
    }
}
