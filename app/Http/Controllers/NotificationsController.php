<?php

namespace App\Http\Controllers;

use App\Models\Notification;

class NotificationsController extends Controller
{
    public function getNotifications($userId)
    {
        $notifications = Notification::where(['notifiable_id' => $userId])
            ->whereNull('read_at')
            ->get()
        ;

        return response()->json(['notifications' => $notifications], 200);
    }
}
