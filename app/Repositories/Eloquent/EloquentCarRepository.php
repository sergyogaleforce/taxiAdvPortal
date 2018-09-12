<?php

namespace App\Repositories\Eloquent;

use App\Car;
use App\Repositories\Contracts\CarRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCarRepository extends AbstractRepository implements CarRepository
{
    public function entity()
    {
        return Car::class;
    }
}
