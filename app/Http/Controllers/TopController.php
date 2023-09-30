<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Topic;

class TopController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $topics = Topic::all();

        return view('top', compact('events', 'topics'));
    }
}
