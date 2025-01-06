<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendMobPushNotification($deviceToken,$title,$body)
    {
        $serverKey = env('FIREBASE_SERVER_KEY');

        $url = 'https://fcm.googleapis.com/fcm/send';

        $notification = [
            'title' => $title,
            'body' => $body,
        ];

        $response = Http::withHeaders([
            'Authorization' => 'key=' . $serverKey,
            'Content-Type' => 'application/json',
        ])->post($url, [
            'to' => $deviceToken,
            'notification' => $notification,
        ]);
        if ($response) {
            return $response;
        } else {
            return false;
        }
    }

    public function generateUserName($name)
    {
        $nameWithoutSpaces = str_replace(' ', '', $name);
        $first3Letters = strtoupper(substr($nameWithoutSpaces, 0, 3));
        $timestamp = now()->timestamp;
        $username = $first3Letters . $timestamp;
        return $username;
    }
}
