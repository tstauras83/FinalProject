<?php

namespace App\Http\Controllers;

use App\Models\Statuses;
use Illuminate\Http\Request;

class StatusesController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $statuses = Statuses::all();

        return view('statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('statuses.create');
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
        $status = new Statuses;
        $status->id = $request->id;
        $status->status = $request->status;
        $status->description = $request->description;
        $status->save();

        // Redirect to user index page with success message
        return redirect()->route('statuses.index')->with('success', 'Status created successfully.');
    }

    public function show(Statuses $status)
    {
        return view('statuses.show', ['status' => $status]);
    }

    public function edit(Statuses $status)
    {
        return view('statuses.edit', compact('status'));
    }

    public function update(Request $request, Statuses $status)
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

        $status->status = $request->status;
        $status->description = $request->description;
        $status->save();
        return redirect()->route('statuses.show', $status);
    }
    public function destroy(Statuses $status)
    {
        $status->delete();
        return redirect()->route('statuses.index');
    }
}
