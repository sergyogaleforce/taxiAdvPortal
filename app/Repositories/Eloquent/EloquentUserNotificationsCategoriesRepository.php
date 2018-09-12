<?php

namespace App\Repositories\Eloquent;

use App\UserNotificationsCategories;
use App\Repositories\Contracts\UserNotificationsCategoriesRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserNotificationsCategoriesRepository extends AbstractRepository implements UserNotificationsCategoriesRepository
{
    public function entity()
    {
        return UserNotificationsCategories::class;
    }
}
