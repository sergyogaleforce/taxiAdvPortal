<?php

namespace App\Repositories\Eloquent;

use App\ClientPayment;
use App\Repositories\Contracts\ClientPaymentRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentClientPaymentRepository extends AbstractRepository implements ClientPaymentRepository
{
    public function entity()
    {
        return ClientPayment::class;
    }
}
