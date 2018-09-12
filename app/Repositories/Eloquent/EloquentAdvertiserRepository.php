<?php

namespace App\Repositories\Eloquent;

use App\Advertiser;
use App\Repositories\Contracts\AdvertiserRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAdvertiserRepository extends AbstractRepository implements AdvertiserRepository
{
    public function entity()
    {
        return Advertiser::class;
    }
}
