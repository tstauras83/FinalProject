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
        $guesteventattendance = new guesteventattendance;
        $guesteventattendance->id = $request->id;
        $guesteventattendance->guest_id = $request->guest_id;
        $guesteventattendance->event_id = $request->event_id;
        $guesteventattendance->attended = $request->attended;
        $guesteventattendance->attendance_code = $request->attendance_code;

        $guesteventattendance->save();

        // Redirect to user index page with success message
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
        /*        $validatedData = $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'password' => 'nullable|min:8|confirmed',
                    'role_id' => 'required|in:1,2,3',
                    'phone_number' => 'nullable|numeric',
                    'address' => 'nullable|max:255',
                    'profile_picture' => 'nullable|url'
                ]);*/

        $guesteventattendance->guest_id = $request->guest_id;
        $guesteventattendance->event_id = $request->event_id;
        $guesteventattendance->attended = $request->attended;
        $guesteventattendance->attendance_code = $request->attendance_code;
        $guesteventattendance->save();
        return redirect()->route('guesteventattendances.show', $guesteventattendance);
    }
    public function destroy(guesteventattendance $guesteventattendance)
    {
        $guesteventattendance->delete();
        return redirect()->route('guesteventattendances.index');
    }
}
