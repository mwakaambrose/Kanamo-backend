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
    }

    public function events()
    {
        //pull todays events from the database and send here.
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendText('Here is what I have so far.');

        for ($i=0; $i < 5; $i++) { 
            $chatfuel->sendText('Hello, Event - '.$i);
        }
    }

    public function subscribe(Request $request)
    {
        $user_id = $request->all()['chatfuel_user_id'];
        $messenger_user_id = $request->all()['chatfuel_user_id'];
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendText('These are the offers we have today: .'.$user_id .' - '.$messenger_user_id);
    }

    public function reserve(Request $request)
    {
        return $request->all(); 
    }

    public function moreinfo()
    {
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendTextCard('Kanamo is events discovery platform. It alerts you to cheap happening places, share the good news with your friends.', [
            $chatfuel->createButtonToURL('Read more', 'http://facebook.com/kanamoUg'),
        ]);
        
    }

}