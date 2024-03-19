<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function submit(Request $req) {
        $event = new Event();
        $event->event_name = $req->input('event_name');
        $event->event_date = $req->input('event_date');
        $event->description = $req->input('description');
        $event->checkin = $req->input('checkin');

        $event->save();

        //return redirect()->route('home');
        //если заполнение не работает сбросить кэш: php artisan config:cache
    }
}
