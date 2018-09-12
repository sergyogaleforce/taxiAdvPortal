<?php

namespace App\Repositories\Eloquent;

use App\DriverReviews;
use App\Repositories\Contracts\DriverReviewsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverReviewsRepository extends AbstractRepository implements DriverReviewsRepository
{
    public function entity()
    {
        return DriverReviews::class;
    }
}
