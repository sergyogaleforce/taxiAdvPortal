<?php

namespace App\Repositories\Eloquent;

use App\Demographics;
use App\Repositories\Contracts\DemographicsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDemographicsRepository extends AbstractRepository implements DemographicsRepository
{
    public function entity()
    {
        return Demographics::class;
    }
}
