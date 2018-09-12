<?php

namespace App\Repositories\Eloquent;

use App\UserPaymentProfile;
use App\Repositories\Contracts\UserPaymentProfileRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserPaymentProfileRepository extends AbstractRepository implements UserPaymentProfileRepository
{
    public function entity()
    {
        return UserPaymentProfile::class;
    }
}
