<?php

namespace App\Repositories\Eloquent;

use App\EmailNotifications;
use App\Repositories\Contracts\EmailNotificationsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentEmailNotificationsRepository extends AbstractRepository implements EmailNotificationsRepository
{
    public function entity()
    {
        return EmailNotifications::class;
    }
}
