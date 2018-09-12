<?php

namespace App\Repositories\Eloquent;

use App\CarAdvertiserPlaces;
use App\Repositories\Contracts\CarAdvertiserPlacesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCarAdvertiserPlacesRepository extends AbstractRepository implements CarAdvertiserPlacesRepository
{
    public function entity()
    {
        return CarAdvertiserPlaces::class;
    }
}
