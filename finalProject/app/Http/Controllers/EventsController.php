<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
            'location' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'created_by' => 'required|max:255',
        ]);

        // Create new Event
        $event = new Event;
        $event->id = $request->id;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->address = $request->address;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->country = $request->country;
        $event->zipcode = $request->zipcode;
        $event->created_by = $request->created_by;
        $event->save();

        // Redirect to Events index page with success message
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        return view('events.show', ['event' => $event]);
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
            'location' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'created_by' => 'required|max:255',
        ]);

        // Update Event
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->address = $request->address;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->country = $request->country;
        $event->zipcode = $request->zipcode;
        $event->created_by = $request->created_by;
        $event->save();

        // Redirect to Events show page.
        return redirect()->route('events.show', $event);
    }
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
