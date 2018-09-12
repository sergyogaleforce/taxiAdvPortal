<?php

namespace App\Repositories\Eloquent;

use App\MatchProductDesignComments;
use App\Repositories\Contracts\MatchProductDesignCommentsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMatchProductDesignCommentsRepository extends AbstractRepository implements MatchProductDesignCommentsRepository
{
    public function entity()
    {
        return MatchProductDesignComments::class;
    }
}
