<?php

namespace App\Repositories\Eloquent;

use App\MatchProductDesign;
use App\Repositories\Contracts\MatchProductDesignRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMatchProductDesignRepository extends AbstractRepository implements MatchProductDesignRepository
{
    public function entity()
    {
        return MatchProductDesign::class;
    }
}
