<?php

namespace App\Repositories\Eloquent;

use App\Driver;
use App\Repositories\Contracts\DriverRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverRepository extends AbstractRepository implements DriverRepository
{
    public function entity()
    {
        return Driver::class;
    }
}
