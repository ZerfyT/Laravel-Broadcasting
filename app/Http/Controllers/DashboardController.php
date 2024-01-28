<?php

namespace App\Http\Controllers;

use App\Services\UserStatics;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $notificationsData = UserStatics::notificationsData();
        $count = $notificationsData[1];
        $notifications = $notificationsData[0];

        if($request->ajax()) {
            return response()->json(['count' => $count, 'notifications' => $notifications]);
        }
        return view('home', compact('count', 'notifications'));
    }
}
