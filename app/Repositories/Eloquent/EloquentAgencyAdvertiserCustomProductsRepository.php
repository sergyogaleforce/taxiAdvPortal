<?php

namespace App\Repositories\Eloquent;

use App\AgencyAdvertiserCustomProducts;
use App\Repositories\Contracts\AgencyAdvertiserCustomProductsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAgencyAdvertiserCustomProductsRepository extends AbstractRepository implements AgencyAdvertiserCustomProductsRepository
{
    public function entity()
    {
        return AgencyAdvertiserCustomProducts::class;
    }
}
