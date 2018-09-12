<?php

namespace App\Repositories\Eloquent;

use App\CarTypes;
use App\Repositories\Contracts\CarTypesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCarTypesRepository extends AbstractRepository implements CarTypesRepository
{
    public function entity()
    {
        return CarTypes::class;
    }
}
