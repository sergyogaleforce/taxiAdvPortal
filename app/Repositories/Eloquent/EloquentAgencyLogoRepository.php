<?php

namespace App\Repositories\Eloquent;

use App\AgencyLogo;
use App\Repositories\Contracts\AgencyLogoRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAgencyLogoRepository extends AbstractRepository implements AgencyLogoRepository
{
    public function entity()
    {
        return AgencyLogo::class;
    }
}
