<?php

namespace App\Repositories\Eloquent;

use App\DriverLogo;
use App\Repositories\Contracts\DriverLogoRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverLogoRepository extends AbstractRepository implements DriverLogoRepository
{
    public function entity()
    {
        return DriverLogo::class;
    }
}
