<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $statuses = Status::all();

        return view('statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function store(Request $request)
    {
// Validate form input
        $request->validate([
            'status' => 'required|unique:statuses',
            'description' => 'required',
        ]);

        // Create new status
        $status = new Status;
        $status->id = $request->id;
        $status->status = $request->status;
        $status->description = $request->description;
        $status->save();

        // Redirect to status index page with success message
        return redirect()->route('statuses.index')->with('success', 'Status created successfully.');
    }

    public function show(Status $status)
    {
        return view('statuses.show', ['status' => $status]);
    }

    public function edit(Status $status)
    {
        return view('statuses.edit', compact('status'));
    }

    public function update(Request $request, Status $status)
    {
// Validate form input
        $request->validate([
            'status' => 'required|unique:statuses',
            'description' => 'required',
        ]);

        // Create new status
        $status->status = $request->status;
        $status->description = $request->description;
        $status->save();

        //redirect to statuses show page
        return redirect()->route('statuses.show', $status);
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('statuses.index');
    }
}
