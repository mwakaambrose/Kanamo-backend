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

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function facebookVerify(Request $request)
    {
        return $request->all()['hub_challenge'];
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function facebookMessage(Request $request)
    {
       
    }
}