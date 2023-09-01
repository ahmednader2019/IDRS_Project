<?php

namespace App\Http\Controllers;

use App\Models\DriverInf;
use Illuminate\Http\Request;

    class NotificationController extends Controller
    {
      public function send($name,$number,$location,$email , $lat , $long)
      {
        $link1 = "https://www.google.com/maps/@{$lat},{$long}";
        // $link2 =  "<a href=\"{$link1}\">Open Location</a>";

        // return $link2 ;


        $basic  = new \Vonage\Client\Credentials\Basic("1b503894", "kx1y16jf1thjOhI2");
        $client = new \Vonage\Client($basic);

        $msg = "Hello from IDRS,

        We regret to inform you that your relative, $name , is currently facing a health problem. We wanted to let you know his current location $link1 , and kindly request that you make an effort to be by his side during this time.";

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS(201007355991,'IDRS', $msg)
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
     }
    }
