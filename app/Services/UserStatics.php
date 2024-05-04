<?php

namespace App\Services;
use App\Models\Notification;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Log;

class UserStatics
{
    public static function notificationsData()
    {
        Debugbar::startMeasure('notificationsData');
        $notifications = Notification::latest()->get();
        $count = $notifications->count();
        Debugbar::stopMeasure('notificationsData');

        return [$notifications, $count];
    }
}
