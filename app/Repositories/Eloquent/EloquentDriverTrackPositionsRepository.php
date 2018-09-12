<?php

namespace App\Repositories\Eloquent;

use App\DriverTrackPositions;
use App\Repositories\Contracts\DriverTrackPositionsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverTrackPositionsRepository extends AbstractRepository implements DriverTrackPositionsRepository
{
    public function entity()
    {
        return DriverTrackPositions::class;
    }
}
