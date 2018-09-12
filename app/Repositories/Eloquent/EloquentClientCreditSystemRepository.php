<?php

namespace App\Repositories\Eloquent;

use App\ClientCreditSystem;
use App\Repositories\Contracts\ClientCreditSystemRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentClientCreditSystemRepository extends AbstractRepository implements ClientCreditSystemRepository
{
    public function entity()
    {
        return ClientCreditSystem::class;
    }
}
