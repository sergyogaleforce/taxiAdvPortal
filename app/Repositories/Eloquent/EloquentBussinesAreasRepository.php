<?php

namespace App\Repositories\Eloquent;

use App\BussinesAreas;
use App\Repositories\Contracts\BussinesAreasRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBussinesAreasRepository extends AbstractRepository implements BussinesAreasRepository
{
    public function entity()
    {
        return BussinesAreas::class;
    }
}
