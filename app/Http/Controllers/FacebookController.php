<?php

namespace App\Http\Controllers;

use App\Chatfuel;
use App\Facebook;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{

    public function index(Request $request)
    {
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendText('Hello, Sever!');
    }

    public function events()
    {
        //pull todays events from the database and send a broadcast here.
        //user ids.

        $chatfuel = new Chatfuel(TRUE);
        $events = Event::all();

        // $business_name = Auth::user()->business_name;
        // $address = Auth::user()->address;
        $chatfuel->sendText('Here is what I have so far.');

        foreach ($events as $event) {
            $chatfuel->sendTextCard(
                'Que Pasa '.
                $event->title.' '.
                $event->description.' starts at'.
                $event->start_time.' stops at. Come to'.
                'Acacia Complex, Kampala Uganda.', 

                [
                    $chatfuel->createCallButton('+256774614935', 'Call to Reserve'),
            ]);
        }
    }

    public function subscribe(Request $request)
    {
        $user_id = $request->all()['chatfuel_user_id'];
        $first_name = $request->all()['first_name'];

        //Store this to the database if not already stored.

        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendText('Hey '.$first_name.', Here is what I have so far.');
        $events = Event::all();

        foreach ($events as $event) {
            $chatfuel->sendTextCard(
                'Que Pasa '.
                $event->title.' '.
                $event->description.' starts at'.
                $event->start_time.' stops at. Come to'.
                'Acacia Complex, Kampala Uganda.', 

                [
                    $chatfuel->createCallButton('+256774614935', 'Call to Reserve'),
            ]);
        }

    }

    public function reserve(Request $request)
    {
        return $request->all(); 
    }

    public function latest(Request $request)
    {

        // fetch last insert post/event in the database
        $chatfuel = new Chatfuel(TRUE);
        $event = Event::all()->last();
        $chatfuel->sendTextCard(
            'Que Pasa '.
            $event->title.' '.
            $event->description.' starts at'.
            $event->start_time.' stops at. Come to'.
            'Acacia Complex, Kampala Uganda.', 

            [
                $chatfuel->createCallButton('+256774614935', 'Call to Reserve'),
        ]);
    }

    public function moreinfo()
    {
        $chatfuel = new Chatfuel(TRUE);
        $chatfuel->sendTextCard('Kanamo is an events discovery platform. It alerts you to cheap happening places, share the good news with your friends.', [
            $chatfuel->createButtonToURL('Read more', 'http://facebook.com/kanamoUg'),
        ]);
        
    }

}