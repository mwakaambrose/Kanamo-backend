<?php

namespace App\Http\Controllers;

use App\Facebook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class FacebookController extends Controller
{
    public function __construct()
    {

    }

    public function facebookVerify(Request $request)
    {
        return $request->all()['hub_challenge'];
    }

    public function message(Request $request)
    {
       return $request->all();;
    }

    public function subscribe(Request $request)
    {

    }

    public function reserve(Request $request)
    {
            
    }

    /**
     *  handle method is required. 
     */
    public function handle(ReceiveMessage $message)
    {
        $this->send(new Text($message->getSender(), "Default Handler: {$message->getMessage()}"));
    }
}