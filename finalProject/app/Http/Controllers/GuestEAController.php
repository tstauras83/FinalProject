<?php

namespace App\Http\Controllers;

use App\Models\GuestEventAttendance;
use Illuminate\Http\Request;

class GuestEAController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $guesteventattendances = guesteventattendance::all();

        return view('guesteventattendance.index', compact('guesteventattendances'));
    }

    public function create()
    {
        return view('guesteventattendance.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'guest_id' => 'required|integer',
            'event_id' => 'required|integer',
            'attended' => 'required',
            'attendance_code' => 'required|string|max:255',
        ]);

        // Create new Guest Event Attendance
        $guesteventattendance = new guesteventattendance;
        $guesteventattendance->id = $request->id;
        $guesteventattendance->guest_id = $request->guest_id;
        $guesteventattendance->event_id = $request->event_id;
        $guesteventattendance->attended = $request->attended;
        $guesteventattendance->attendance_code = $request->attendance_code;

        $guesteventattendance->save();

        // Redirect to guest event attribute index page with success message
        return redirect()->route('guesteventattendances.index')->with('success', 'guesteventattendance created successfully.');
    }

    public function show(guesteventattendance $guesteventattendance)
    {
        return view('guesteventattendance.show', ['guesteventattendance' => $guesteventattendance]);
    }

    public function edit(guesteventattendance $guesteventattendance)
    {
        return view('guesteventattendance.edit', compact('guesteventattendance'));
    }

    public function update(Request $request, guesteventattendance $guesteventattendance)
    {
        // Validate form input
        $request->validate([
            'guest_id' => 'required|integer',
            'event_id' => 'required|integer',
            'attended' => 'required',
            'attendance_code' => 'required|string|max:255',
        ]);

        //Update guest event attributes
        $guesteventattendance->guest_id = $request->guest_id;
        $guesteventattendance->event_id = $request->event_id;
        $guesteventattendance->attended = $request->attended;
        $guesteventattendance->attendance_code = $request->attendance_code;
        $guesteventattendance->save();

        //redirect to guest event attributes show page
        return redirect()->route('guesteventattendances.show', $guesteventattendance);
    }
    public function destroy(guesteventattendance $guesteventattendance)
    {
        // deletes by ID
        $guesteventattendance->delete();
        return redirect()->route('guesteventattendances.index');
    }
}
