<?php

namespace App\Repositories\Eloquent;

use App\Colors;
use App\Repositories\Contracts\ColorsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentColorsRepository extends AbstractRepository implements ColorsRepository
{
    public function entity()
    {
        return Colors::class;
    }
}
