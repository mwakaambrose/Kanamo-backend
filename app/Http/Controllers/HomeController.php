<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use juno_okyo\Chatfuel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendText('Hello, World!');

        $chatfuel->createQuickReply('Quick Replies', array(
          $chatfuel->createQuickReplyButton('Test', ['block', 'block 2'])
        ));
    }
}
