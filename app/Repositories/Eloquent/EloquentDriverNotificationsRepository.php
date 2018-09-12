<?php

namespace App\Repositories\Eloquent;

use App\DriverNotifications;
use App\Repositories\Contracts\DriverNotificationsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverNotificationsRepository extends AbstractRepository implements DriverNotificationsRepository
{
    public function entity()
    {
        return DriverNotifications::class;
    }
}
