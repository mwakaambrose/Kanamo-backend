<?php

namespace App\Http\Controllers;

use App\Chatfuel;
use App\Facebook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FacebookController extends Controller
{

    public function index(Request $request)
    {
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendText('Hello, Sever!');

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