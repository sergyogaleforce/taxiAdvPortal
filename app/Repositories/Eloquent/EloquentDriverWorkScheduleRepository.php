<?php

namespace App\Repositories\Eloquent;

use App\DriverWorkSchedule;
use App\Repositories\Contracts\DriverWorkScheduleRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverWorkScheduleRepository extends AbstractRepository implements DriverWorkScheduleRepository
{
    public function entity()
    {
        return DriverWorkSchedule::class;
    }
}
