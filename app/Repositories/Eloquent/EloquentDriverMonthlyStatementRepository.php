<?php

namespace App\Repositories\Eloquent;

use App\DriverMonthlyStatement;
use App\Repositories\Contracts\DriverMonthlyStatementRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDriverMonthlyStatementRepository extends AbstractRepository implements DriverMonthlyStatementRepository
{
    public function entity()
    {
        return DriverMonthlyStatement::class;
    }
}
