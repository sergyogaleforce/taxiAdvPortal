<?php

namespace App\Repositories\Eloquent;

use App\MatchProductDesignVersion;
use App\Repositories\Contracts\MatchProductDesignVersionRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMatchProductDesignVersionRepository extends AbstractRepository implements MatchProductDesignVersionRepository
{
    public function entity()
    {
        return MatchProductDesignVersion::class;
    }
}
