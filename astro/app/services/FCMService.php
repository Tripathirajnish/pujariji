<?php

namespace App\Services;
use GuzzleHttp\Client;

class FCMService
{


     // Public property to store the service account key
     public $serviceAccountKey = [
            "type"=>"service_account",
            "project_id"=> "astro-pujari-ji",
            "private_key_id"=> "37eadbc840b17832c9b5ff501448a58893249cee",
            "private_key"=> "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCtEw7MRqW+j+aF\nIZHVDiYqThUX9QWS6sAauvi6LsPQK5WCjHrEcqriieZTj4OjwKNCUbWVAXaK+jXb\nBPW1pDqbKQ0cFHLMJLJiJaaHBIYOvuBGESi+jCMnkB3ctS/joK+bIvyhfyH84ZE6\nQMLQdwzG3kDEe4quq0Yz0l1bRgEibIgAPs2R/j47s4LQ9XY6aLPht5Gdo7XvaM6A\nnB+yNNdYcY6uFO7K1ZpKRsI7/O4hR+joDg7ZjLO/KAjBLQX3wNPUcfbJXDiigcwc\n3I68rv9GGrHmIhZxT1wa47jbXas/6f+fHeC6hkC0N4dFd9OAElVKxXELyhnP9skF\nMpspVbQlAgMBAAECggEAHR/yYwzWcnF7zNZ/2HcXlBHsucnZRMZtSnJBTe91sy/K\napwiQrG7MQEcud4SPHm733qpkGgdHzkI3BEDGiyHUjn/w0Rrpw/b1ulYEyt/NbcI\nPbJAhYRGnC9D3zK8WtVdB8HE+pZOzWPWERP51KPcChE3m/jgNxGKcEkLvcLTiQus\nZypn+nDjEM/KzJ+89XjjiLkC4B4i3P8jOETjk9dD/jRYDrpDWDaAedPySfISN0Be\nSsXe/mFEZ5o70wRuV7x0mrbjs2cx9DY66u4B05K+er5pNlKv7qq/sZsWEyBjBd7o\niQiJt5abHpzUMknzxD4pL2XlqnCjWjkeDCSHpNhztwKBgQDkoxMgNXn23Py03YNX\n0iGapg9xUWE8JykNuUhcCdjjuqofkLRKLFzFQ/Sk1NK7BHRV5LillHOkUifqRQvs\nsvjcaF+4t1ZD0ZkmK3Hn9rVud4qnTbyDL1kr/3+W2YMmfAtzNFHONOA0XBCCzC9q\nOjWvroN0zJapFpALcjIKTng6CwKBgQDByauw9oAim7Vc3HbmDcxxcDKHZ7tDSZ/W\nJeGS0xvamv9P8EeVWIBQVXo8L3U4D53WDDVrBzr0pDhRhgYGQ+pTJ4NWDcccjuNO\napCZHGHP6RvaEF+UmIRnLqat265vN8V4MFKtI17inVmu8brBUE8q+he8qOdshqXQ\nf4B43hzYjwKBgQCw71ZUva2mEjxqR2ZmZxJkWJBo1F6YK4IEwdcyithS29jd1qD/\nKbedXUqM6LovynGxKvCOCwU3K/EBxe9FfPdDsm4pR5A1qZWISWS761taop4lfO4e\n41xxxSba+XcaKDLAM8P+/UJoorqQTi1/Wo7DZx0KHW2WawSMJxJ8kV9PIwKBgDOD\n9x5uCRYqKoZrHTh/BpBJcUVJsCBtHA6Dt3meoVL1zVVk3MK46jNw5bPGMfUbQaw7\nRqATJfsPBOG3LTbRKyO751AjDYFsAsU/0vzA7Memgn7vx1jrSpdbcXfaZH6wZtBS\nmEfqlTjM96BoJmtpfAJCxbijdhIFoWLR4kc/VI/FAoGAREmqv9StMiI8Qu8fmvSo\nsxmN/sG5X4jF1/hhtzIcpNObbkyO0sqCK33S3bAHd/j/ewASe6qhu6TKRUHMhQFj\n5CPuLSmWNkBaJ/ITFaifKNdsAr43Ro/esmojOdfh+YvaIKvar3sh93kR0bgu4GMz\nUKWNpJEWePmVG2gHEG0vSZE=\n-----END PRIVATE KEY-----\n",
            "client_email"=> "firebase-adminsdk-unnjl@astro-pujari-ji.iam.gserviceaccount.com",
            "client_id"=> "101331651543255996758",
            "auth_uri"=> "https://accounts.google.com/o/oauth2/auth",
            "token_uri"=> "https://oauth2.googleapis.com/token",
            "auth_provider_x509_cert_url"=> "https://www.googleapis.com/oauth2/v1/certs",
            "client_x509_cert_url"=> "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-unnjl%40astro-pujari-ji.iam.gserviceaccount.com",
            "universe_domain"=> "googleapis.com"
    ];


public static function send($userDeviceDetail, $notification)
{
    $fcmService = new self();
    $projectId = 'astro-pujari-ji';
    $serverApiKey = env('FCM_SERVER_KEY');
    $accessToken = $fcmService->getAccessToken($serverApiKey);

    $endpoint = 'https://fcm.googleapis.com/v1/projects/' . $projectId . '/messages:send';

    $responses = []; // Array to store individual responses

    foreach ($userDeviceDetail->pluck('fcmToken')->all() as $token) {
        $notificationType = isset($notification['body']['notificationType']) ? (string) $notification['body']['notificationType'] : null;

		
        $payload = [
            'message' => [
                'token' => $token,
                'notification' => [
                    'title' => $notification['title'],
                    'body' => $notification['body']['description'],
                ],
                'data' => [
                    'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                    'body' => json_encode($notification['body']),
                   
                ],
                'android' => [
                    'priority' => 'high',
                ],
            ],
        ];
	
		
        $headers = [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json',
        ];

        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $responses[] = json_decode($response, true);
    }

    return $responses;
}


    private function getAccessToken($serverApiKey)
    {
        $url = 'https://www.googleapis.com/oauth2/v4/token';
        $data = [
            'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
            'assertion' => $this->generateJwtAssertion($serverApiKey),
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $body = json_decode($response, true);

        return $body['access_token'];
    }


    private function generateJwtAssertion($serverApiKey)
{
    $now = time();
    $exp = $now + 3600; // Token expires in 1 hour

    $jwtClaims = [
        'iss' => $this->serviceAccountKey['client_email'],
        'sub' => $this->serviceAccountKey['client_email'],
        'aud' => 'https://www.googleapis.com/oauth2/v4/token',
        'scope' => 'https://www.googleapis.com/auth/cloud-platform',
        'iat' => $now,
        'exp' => $exp,
    ];

    $jwtHeader = [
        'alg' => 'RS256',
        'typ' => 'JWT',
    ];

    $base64UrlEncodedHeader = $this->base64UrlEncode(json_encode($jwtHeader));
    $base64UrlEncodedClaims = $this->base64UrlEncode(json_encode($jwtClaims));

    $signatureInput = $base64UrlEncodedHeader.'.'.$base64UrlEncodedClaims;

    $privateKey = openssl_pkey_get_private($this->serviceAccountKey['private_key']);
    openssl_sign($signatureInput, $signature, $privateKey, OPENSSL_ALGO_SHA256);
    openssl_free_key($privateKey);

    $base64UrlEncodedSignature = $this->base64UrlEncode($signature);

    return $signatureInput.'.'.$base64UrlEncodedSignature;
}



    private function base64UrlEncode($input)
    {
        return rtrim(strtr(base64_encode($input), '+/', '-_'), '=');
    }



    // public static function send($userDeviceDetail, $notification)
    // {
    //     $serverApiKey = env('FCM_SERVER_KEY');
    //     $payload = [
    //         "notification" => [
    //             "title" => $notification['title'],
    //             "body" => $notification['body']['description'],
    //         ],
    //         "data" => [
    //             "click_action" => "FLUTTER_NOTIFICATION_CLICK",
    //             "body" => $notification['body'],

    //         ],
    //         "android" => [
    //             "priority" => 'high',
    //         ],
    //         "registration_ids" => $userDeviceDetail->pluck('fcmToken')->all(),
    //     ];
    //     $dataString = json_encode($payload);
    //     $headers = [
    //         'Authorization: key=' . $serverApiKey,
    //         'Content-Type: application/json',
    //     ];
    //     $ch = curl_init();

    //     curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
    //     return curl_exec($ch);
		
	// 	curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
	// 	curl_setopt($ch, CURLOPT_POST, true);
	// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
	// 	// Set a short timeout to make the request asynchronous
	// 	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	// 	 // Execute the request in the background
	// 	curl_exec($ch);
	// 	// Close the cURL handle
	// 	curl_close($ch);
	// 	return true;
    // }
}
