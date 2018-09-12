<?php

namespace App\Repositories\Eloquent;

use App\MatchAdvertiserProducts;
use App\Repositories\Contracts\MatchAdvertiserProductsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentMatchAdvertiserProductsRepository extends AbstractRepository implements MatchAdvertiserProductsRepository
{
    public function entity()
    {
        return MatchAdvertiserProducts::class;
    }
}
