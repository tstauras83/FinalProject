<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $events = Events::all();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        /*        $request->validate([
                    'name' => 'required',
                    'email' => 'required|unique:users,email',
                    'password' => 'required',
                    'role_id' => 'required',
                    'phone_number' => 'required',
                    'address' => 'required',
                    'profile_picture' => 'required',
                ]);*/

        // Create new user
        $event = new Events;
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

        // Redirect to user index page with success message
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function show(Events $event)
    {
        return view('events.show', ['event' => $event]);
    }

    public function edit(Events $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Events $event)
    {
        /*        $validatedData = $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'password' => 'nullable|min:8|confirmed',
                    'role_id' => 'required|in:1,2,3',
                    'phone_number' => 'nullable|numeric',
                    'address' => 'nullable|max:255',
                    'profile_picture' => 'nullable|url'
                ]);*/

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
        return redirect()->route('events.show', $event);
    }
    public function destroy(Events $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
