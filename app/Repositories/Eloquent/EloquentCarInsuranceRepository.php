<?php

namespace App\Repositories\Eloquent;

use App\CarInsurance;
use App\Repositories\Contracts\CarInsuranceRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCarInsuranceRepository extends AbstractRepository implements CarInsuranceRepository
{
    public function entity()
    {
        return CarInsurance::class;
    }
}
