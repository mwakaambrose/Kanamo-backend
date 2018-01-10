<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AndroidApiController extends Controller
{
    public function today(Request $request)
    {
    	return Event::all();
    }
}
