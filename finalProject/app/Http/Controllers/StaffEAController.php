<?php

namespace App\Http\Controllers;

use App\Models\StaffEventAssignment;
use Illuminate\Http\Request;

class StaffEAController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $staffeventassignments = StaffEventAssignment::all();

        return view('staffeventassignments.index', compact('staffeventassignments'));
    }

    public function create()
    {
        return view('staffeventassignments.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'staff_id' => 'required',
            'event_id' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'duration_minutes' => 'max:255',
            'staff_assignment' => 'required',
        ]);

        // Create new staff event assignment
        $staffeventassignment = new StaffEventAssignment;
        $staffeventassignment->id = $request->id;
        $staffeventassignment->staff_id = $request->staff_id;
        $staffeventassignment->event_id = $request->event_id;
        $staffeventassignment->start_time = $request->start_time;
        $staffeventassignment->end_time = $request->end_time;
        $staffeventassignment->duration_minutes = $request->integer;
        $staffeventassignment->staff_assignment = $request->staff_assignment;
        $staffeventassignment->save();

        // Redirect to user index page with success message
        return redirect()->route('staffeventassignments.index')->with('success', 'staffeventassignment created successfully.');
    }

    public function show(StaffEventAssignment $staffeventassignment)
    {
        return view('staffeventassignments.show', ['staffeventassignment' => $staffeventassignment]);
    }

    public function edit(StaffEventAssignment $staffeventassignment)
    {
        return view('staffeventassignments.edit', compact('staffeventassignment'));
    }

    public function update(Request $request, StaffEventAssignment $staffeventassignment)
    {
        // Validate form input
        $request->validate([
            'staff_id' => 'required',
            'event_id' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'duration_minutes' => 'max:255',
            'staff_assignment' => 'required',
        ]);

        // Update staff event assignment
        $staffeventassignment->staff_id = $request->staff_id;
        $staffeventassignment->event_id = $request->event_id;
        $staffeventassignment->start_time = $request->start_time;
        $staffeventassignment->end_time = $request->end_time;
        $staffeventassignment->duration_minutes = $request->duration_minutes;
        $staffeventassignment->staff_assignment = $request->staff_assignment;
        $staffeventassignment->save();

        //redirect to staff event assignment show page
        return redirect()->route('staffeventassignments.show', $staffeventassignment);
    }

    public function destroy(StaffEventAssignment $staffeventassignment)
    {
        $staffeventassignment->delete();
        return redirect()->route('staffeventassignments.index');
    }
}
