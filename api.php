<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api-gw.payclip.com/checkout', [
    'body' => '
    {
        "amount":1.0,
        "currency":"MXN",
        "purchase_description":"ejemplo de compra",
        "redirection_url":
        {
            "success":"https://my-website.com/redirection/success?me_reference_id=OID123456789",
            "error":"https://my-website.com/redirection/error?me_reference_id=OID123456789",
            "default":"https://my-website.com/redirection/default"
        },
        "expires_at":"",
        "metadata":{
            "me_reference_id": "OID123456789",
            "customer_info": 
            {
                "name": "Michael Eduardo",
                "email": "mikeed1998@gmail.com",
                "phone": "3322932239"
            },
            "billing_address": 
            {
                "zip_code": "03800A",
                "locality": "Villas de San Juan",
                "city": "Guadalajara",
                "State": "Jalisco",
                "country": "Mexico",
                "street": "Av. Normalistas",
                "outdoor_number": "C9",
                "interior_number": "9",
                "reference": "Manzana I",
                "between_streets": "Av. Noramlistas y Monte Olivete",
                "floor": "4"
            }
        },
        "webhook_url": "https://webhook.site/2c408bb6-7792-4833-8294-66fe59b091b6"
    }',
    'headers' => [
        'accept' => 'application/vnd.com.payclip.v2+json',
        'content-type' => 'application/json',
        'x-api-key' => 'Basic YzA4NjNkZDMtNTVlOC00MzRlLWEzOWEtYTkxM2E4MTc4NDRhOjViMDk3ZmI4LTVhMTYtNDRjMS1hZGYyLWVlNjhlYjlhYmZlYQ==',
    ],
]);

echo $response->getBody();









// require_once('vendor/autoload.php');

// $client = new \GuzzleHttp\Client();

// $response = $client->request('POST', 'https://api-gw.payclip.com/checkout', [
//     'body' => '
//     {
//         "amount":1.0,
//         "currency":"MXN",
//         "purchase_description":"ejemplo de compra",
//         "redirection_url":
//         {
//             "success":"https://my-website.com/redirection/success?me_reference_id=OID123456789",
//             "error":"https://my-website.com/redirection/error?me_reference_id=OID123456789",
//             "default":"https://my-website.com/redirection/default"
//         }
//     }',
//     'headers' => [
//         'accept' => 'application/vnd.com.payclip.v2+json',
//         'content-type' => 'application/json',
//         'x-api-key' => 'Basic YzA4NjNkZDMtNTVlOC00MzRlLWEzOWEtYTkxM2E4MTc4NDRhOjViMDk3ZmI4LTVhMTYtNDRjMS1hZGYyLWVlNjhlYjlhYmZlYQ==',
//     ],
// ]);

// echo $response->getBody();