<?php

namespace App\Http\Middleware;

use App\Models\Notification;
use Closure;
use Illuminate\Http\Request;

class PassNotificationCount
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $notificationCount = $this->getNotificationCount();

        $responseData = $response->getData();
        $responseData->notificationCount = $notificationCount;

        $response->setContent(json_encode($responseData));

        return $response;
    }

    protected function getNotificationCount()
    {
        return Notification::where(['notifiable_id' => 1])
            ->whereNull('read_at')
            ->count()
        ;
    }
}
