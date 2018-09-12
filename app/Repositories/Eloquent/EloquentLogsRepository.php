<?php

namespace App\Repositories\Eloquent;

use App\Logs;
use App\Repositories\Contracts\LogsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentLogsRepository extends AbstractRepository implements LogsRepository
{
    public function entity()
    {
        return Logs::class;
    }
}
