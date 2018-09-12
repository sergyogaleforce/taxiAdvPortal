<?php

namespace App\Repositories\Eloquent;

use App\advertiserRequest;
use App\Repositories\Contracts\advertiserRequestRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentadvertiserRequestRepository extends AbstractRepository implements advertiserRequestRepository
{
    public function entity()
    {
        return advertiserRequest::class;
    }
}
