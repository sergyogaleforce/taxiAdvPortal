<?php

namespace App\Repositories\Eloquent;

use App\AppSounds;
use App\Repositories\Contracts\AppSoundsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAppSoundsRepository extends AbstractRepository implements AppSoundsRepository
{
    public function entity()
    {
        return AppSounds::class;
    }
}
