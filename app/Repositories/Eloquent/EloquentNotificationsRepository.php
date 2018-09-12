<?php

namespace App\Repositories\Eloquent;

use App\Notifications;
use App\Repositories\Contracts\NotificationsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentNotificationsRepository extends AbstractRepository implements NotificationsRepository
{
    public function entity()
    {
        return Notifications::class;
    }
}
