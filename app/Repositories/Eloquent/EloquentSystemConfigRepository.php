<?php

namespace App\Repositories\Eloquent;

use App\SystemConfig;
use App\Repositories\Contracts\SystemConfigRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentSystemConfigRepository extends AbstractRepository implements SystemConfigRepository
{
    public function entity()
    {
        return SystemConfig::class;
    }
}
