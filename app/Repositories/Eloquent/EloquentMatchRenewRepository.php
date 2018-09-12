<?php

namespace App\Repositories\Eloquent;

use App\MatchRenew;
use App\Repositories\Contracts\MatchRenewRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMatchRenewRepository extends AbstractRepository implements MatchRenewRepository
{
    public function entity()
    {
        return MatchRenew::class;
    }
}
