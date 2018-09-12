<?php

namespace App\Repositories\Eloquent;

use App\DriverVerificationPictureAnalasis;
use App\Repositories\Contracts\DriverVerificationPictureAnalasisRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverVerificationPictureAnalasisRepository extends AbstractRepository implements DriverVerificationPictureAnalasisRepository
{
    public function entity()
    {
        return DriverVerificationPictureAnalasis::class;
    }
}
