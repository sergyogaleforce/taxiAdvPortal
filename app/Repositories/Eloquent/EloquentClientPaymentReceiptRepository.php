<?php

namespace App\Repositories\Eloquent;

use App\ClientPaymentReceipt;
use App\Repositories\Contracts\ClientPaymentReceiptRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentClientPaymentReceiptRepository extends AbstractRepository implements ClientPaymentReceiptRepository
{
    public function entity()
    {
        return ClientPaymentReceipt::class;
    }
}
