<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotificationController extends Controller
{
    public function fetchNotification()
    {
        $response = Http::get('https://www.keemasan.co.id/fetch.php');
        $notifications = json_decode($response->body(), true); // Assuming the response is JSON

        // Pass the data to the view
        return view('partials.notification', compact('notifications'));
        // return response()->json($response);
    }
}
