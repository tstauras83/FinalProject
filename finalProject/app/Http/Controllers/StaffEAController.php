<?php

namespace App\Http\Controllers;

use App\Models\StaffEventAssignments;
use Illuminate\Http\Request;

class StaffEAController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $staffeventassignments = StaffEventAssignments::all();

        return view('staffeventassignments.index', compact('staffeventassignments'));
    }

    public function create()
    {
        return view('staffeventassignments.create');
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
        $staffeventassignment = new StaffEventAssignments;
        $staffeventassignment->id = $request->id;
        $staffeventassignment->staff_id = $request->staff_id;
        $staffeventassignment->event_id = $request->event_id;
        $staffeventassignment->start_time = $request->start_time;
        $staffeventassignment->end_time = $request->end_time;
        $staffeventassignment->duration_minutes = $request->duration_minutes;
        $staffeventassignment->staff_assignment = $request->staff_assignment;
        $staffeventassignment->save();

        // Redirect to user index page with success message
        return redirect()->route('staffeventassignments.index')->with('success', 'staffeventassignment created successfully.');
    }

    public function show(StaffEventAssignments $staffeventassignment)
    {
        return view('staffeventassignments.show', ['staffeventassignment' => $staffeventassignment]);
    }

    public function edit(StaffEventAssignments $staffeventassignment)
    {
        return view('staffeventassignments.edit', compact('staffeventassignment'));
    }

    public function update(Request $request, StaffEventAssignments $staffeventassignment)
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

        $staffeventassignment->staff_id = $request->staff_id;
        $staffeventassignment->event_id = $request->event_id;
        $staffeventassignment->start_time = $request->start_time;
        $staffeventassignment->end_time = $request->end_time;
        $staffeventassignment->duration_minutes = $request->duration_minutes;
        $staffeventassignment->staff_assignment = $request->staff_assignment;
        $staffeventassignment->save();
        return redirect()->route('staffeventassignments.show', $staffeventassignment);
    }

    public function destroy(StaffEventAssignments $staffeventassignment)
    {
        $staffeventassignment->delete();
        return redirect()->route('staffeventassignments.index');
    }
}
