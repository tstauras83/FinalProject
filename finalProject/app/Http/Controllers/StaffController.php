<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $staffs = Staff::all();

        return view('staff.index', compact('staffs'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:staff',
            'email' => 'required|unique:staff',
            'phone' => 'required',
            'role_id' => 'required',
            'job_title' => 'required',
        ]);

        // Create new staff member
        $staff = new Staff;
        $staff->id = $request->id;
        $staff->name = $request->name;
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role_id;
        $staff->job_title = $request->job_title;
        $staff->save();

        // Redirect to staff index page with success message
        return redirect()->route('staff.index')->with('success', 'Staff created successfully.');
    }

    public function show(Staff $staff)
    {
        return view('staff.show', ['staff' => $staff]);
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        // Validate form input
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:staff',
            'email' => 'required|unique:staff',
            'phone' => 'required',
            'role_id' => 'required',
            'job_title' => 'required',
        ]);

        // Create new staff member
        $staff->name = $request->name;
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role_id;
        $staff->job_title = $request->job_title;
        $staff->save();

        //redirect to staff show page
        return redirect()->route('staff.show', $staff);
    }
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index');
    }
}
