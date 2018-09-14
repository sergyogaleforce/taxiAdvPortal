<?php

namespace App\Repositories\Eloquent;

use App\CarPictures;
use App\Repositories\Contracts\CarPicturesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCarPicturesRepository extends AbstractRepository implements CarPicturesRepository
{
    public function entity()
    {
        return CarPictures::class;
    }
}
