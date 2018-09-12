<?php

namespace App\Repositories\Eloquent;

use App\UserAccountRenew;
use App\Repositories\Contracts\UserAccountRenewRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserAccountRenewRepository extends AbstractRepository implements UserAccountRenewRepository
{
    public function entity()
    {
        return UserAccountRenew::class;
    }
}
