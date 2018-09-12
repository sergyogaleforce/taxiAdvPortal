<?php

namespace App\Repositories\Eloquent;

use App\MobileDevices;
use App\Repositories\Contracts\MobileDevicesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMobileDevicesRepository extends AbstractRepository implements MobileDevicesRepository
{
    public function entity()
    {
        return MobileDevices::class;
    }
}
