<?php

namespace App\Repositories\Eloquent;

use App\AgencyReviews;
use App\Repositories\Contracts\AgencyReviewsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAgencyReviewsRepository extends AbstractRepository implements AgencyReviewsRepository
{
    public function entity()
    {
        return AgencyReviews::class;
    }
}
