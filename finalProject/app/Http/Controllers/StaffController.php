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

        $staff = new Staff;
        $staff->id = $request->id;
        $staff->name = $request->name;
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role_id;
        $staff->job_title = $request->job_title;
        $staff->employment_date = $request->employment_date;
        $staff->termination_date = $request->termination_date;
        $staff->salary = $request->salary;
        $staff->department = $request->department;
        $staff->supervisor_id = $request->supervisor_id;
        $staff->photo_url = $request->photo_url;
        $staff->save();

        // Redirect to user index page with success message
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

        $staff->name = $request->name;
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role_id;
        $staff->job_title = $request->job_title;
        $staff->employment_date = $request->employment_date;
        $staff->termination_date = $request->termination_date;
        $staff->salary = $request->salary;
        $staff->department = $request->department;
        $staff->supervisor_id = $request->supervisor_id;
        $staff->photo_url = $request->photo_url;
        $staff->save();
        return redirect()->route('staff.show', $staff);
    }
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index');
    }
}
