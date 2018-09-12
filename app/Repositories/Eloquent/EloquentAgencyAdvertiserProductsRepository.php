<?php

namespace App\Repositories\Eloquent;

use App\AgencyAdvertiserProducts;
use App\Repositories\Contracts\AgencyAdvertiserProductsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAgencyAdvertiserProductsRepository extends AbstractRepository implements AgencyAdvertiserProductsRepository
{
    public function entity()
    {
        return AgencyAdvertiserProducts::class;
    }
}
