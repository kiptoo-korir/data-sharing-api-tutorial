<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class ActivitiesController extends Controller
{
    public function getActivities($userId)
    {
        $activities = Activity::where(['causer_id' => $userId])
            ->get()
        ;

        return response()->json(['activities' => $activities], 200);
    }
}
