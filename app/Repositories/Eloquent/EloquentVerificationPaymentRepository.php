<?php

namespace App\Repositories\Eloquent;

use App\VerificationPayment;
use App\Repositories\Contracts\VerificationPaymentRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentVerificationPaymentRepository extends AbstractRepository implements VerificationPaymentRepository
{
    public function entity()
    {
        return VerificationPayment::class;
    }
}
