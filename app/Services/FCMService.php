<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class FCMService
{
    public static function send($token, $notification)
    {
        $response = Http::acceptJson()->withToken(get_fcm_token())->post(
            'https://fcm.googleapis.com/fcm/send',
            [
                'to' => $token,
                'notification' => $notification,
                'sound' => true,
                'popup' => true,
            ]
        );
        return $response;
    }
}
