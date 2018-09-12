<?php

namespace App\Repositories\Eloquent;

use App\DriverVerificationSchedule;
use App\Repositories\Contracts\DriverVerificationScheduleRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverVerificationScheduleRepository extends AbstractRepository implements DriverVerificationScheduleRepository
{
    public function entity()
    {
        return DriverVerificationSchedule::class;
    }
}
