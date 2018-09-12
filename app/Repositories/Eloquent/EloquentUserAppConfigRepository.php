<?php

namespace App\Repositories\Eloquent;

use App\UserAppConfig;
use App\Repositories\Contracts\UserAppConfigRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserAppConfigRepository extends AbstractRepository implements UserAppConfigRepository
{
    public function entity()
    {
        return UserAppConfig::class;
    }
}
