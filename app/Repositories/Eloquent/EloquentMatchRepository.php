<?php

namespace App\Repositories\Eloquent;

use App\Match;
use App\Repositories\Contracts\MatchRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMatchRepository extends AbstractRepository implements MatchRepository
{
    public function entity()
    {
        return Match::class;
    }
}
