<?php

namespace App\Services;
use App\Models\Notification;
use App\Models\User;

class UserStatics
{
    public static function notificationsData()
    {
        $notifications = Notification::all();
        $count = count($notifications);
        return [$notifications, $count];
    }
}
