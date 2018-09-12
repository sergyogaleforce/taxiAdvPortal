<?php

namespace App\Repositories\Eloquent;

use App\DriverVerificationPicture;
use App\Repositories\Contracts\DriverVerificationPictureRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverVerificationPictureRepository extends AbstractRepository implements DriverVerificationPictureRepository
{
    public function entity()
    {
        return DriverVerificationPicture::class;
    }
}
