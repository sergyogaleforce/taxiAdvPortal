<?php

namespace App\Repositories\Eloquent;

use App\CarPlaces;
use App\Repositories\Contracts\CarPlacesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCarPlacesRepository extends AbstractRepository implements CarPlacesRepository
{
    public function entity()
    {
        return CarPlaces::class;
    }
}
