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
       return $request->all();
    }

    public function subscribe(Request $request)
    {
        return $request->all();
    }

    public function reserve(Request $request)
    {
        return $request->all(); 
    }
}