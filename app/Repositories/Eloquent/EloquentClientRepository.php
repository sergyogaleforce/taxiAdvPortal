<?php

namespace App\Repositories\Eloquent;

use App\Client;
use App\Repositories\Contracts\ClientRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentClientRepository extends AbstractRepository implements ClientRepository
{
    public function entity()
    {
        return Client::class;
    }
}
