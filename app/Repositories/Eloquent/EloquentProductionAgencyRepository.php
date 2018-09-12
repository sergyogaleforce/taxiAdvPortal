<?php

namespace App\Repositories\Eloquent;

use App\ProductionAgency;
use App\Repositories\Contracts\ProductionAgencyRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentProductionAgencyRepository extends AbstractRepository implements ProductionAgencyRepository
{
    public function entity()
    {
        return ProductionAgency::class;
    }
}
