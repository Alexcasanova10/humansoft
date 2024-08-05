<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
{
    $all_events = Event::all();

    $events = [];

    foreach ($all_events as $event) {
        $events[] = [
            'id' => $event->id,
            'title' => $event->event,
            'start' => $event->start_date,
            'end' => $event->end_date,
        ];
    }

    return view('calendar.indexo', compact('events'));
}

    public function store(Request $request)
    {
        Event::create([
            'event' => $request->event,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('calendar.index');
    }

    public function destroy(Request $request)
    {
        $event = Event::findOrFail($request->id);
        $event->delete();

        return redirect()->route('calendar.index');
    }
}






