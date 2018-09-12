<?php

namespace App\Repositories\Eloquent;

use App\PushNotifications;
use App\Repositories\Contracts\PushNotificationsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentPushNotificationsRepository extends AbstractRepository implements PushNotificationsRepository
{
    public function entity()
    {
        return PushNotifications::class;
    }
}
