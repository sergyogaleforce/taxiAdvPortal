<?php

namespace App\Repositories\Eloquent;

use App\AdvertiserCategories;
use App\Repositories\Contracts\AdvertiserCategoriesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAdvertiserCategoriesRepository extends AbstractRepository implements AdvertiserCategoriesRepository
{
    public function entity()
    {
        return AdvertiserCategories::class;
    }
}
