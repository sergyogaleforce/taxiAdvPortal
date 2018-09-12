<?php

namespace App\Repositories\Eloquent;

use App\UserPassForget;
use App\Repositories\Contracts\UserPassForgetRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserPassForgetRepository extends AbstractRepository implements UserPassForgetRepository
{
    public function entity()
    {
        return UserPassForget::class;
    }
}
