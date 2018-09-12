<?php

namespace App\Repositories\Eloquent;

use App\TextNotifications;
use App\Repositories\Contracts\TextNotificationsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentTextNotificationsRepository extends AbstractRepository implements TextNotificationsRepository
{
    public function entity()
    {
        return TextNotifications::class;
    }
}
