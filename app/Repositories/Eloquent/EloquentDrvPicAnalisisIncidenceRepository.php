<?php

namespace App\Repositories\Eloquent;

use App\DrvPicAnalisisIncidence;
use App\Repositories\Contracts\DrvPicAnalisisIncidenceRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDrvPicAnalisisIncidenceRepository extends AbstractRepository implements DrvPicAnalisisIncidenceRepository
{
    public function entity()
    {
        return DrvPicAnalisisIncidence::class;
    }
}
