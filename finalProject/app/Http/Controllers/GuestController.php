<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $guests = Guests::all();

        return view('guests.index', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
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
        $guest = new Guests;
        $guest->id = $request->id;
        $guest->name = $request->name;
        $guest->username = $request->username;
        $guest->email = $request->email;
        $guest->role_id = $request->role_id;
        $guest->phone = $request->phone;
        $guest->company = $request->company;
        $guest->job_title = $request->job_title;
        $guest->notes = $request->notes;
        $guest->save();

        // Redirect to user index page with success message
        return redirect()->route('guests.index')->with('success', 'Guest created successfully.');
    }

    public function show(Guests $guest)
    {
        return view('guests.show', ['guest' => $guest]);
    }

    public function edit(Guests $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, Guests $guest)
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

        $guest->name = $request->name;
        $guest->username = $request->username;
        $guest->email = $request->email;
        $guest->role_id = $request->role_id;
        $guest->phone = $request->phone;
        $guest->company = $request->company;
        $guest->job_title = $request->job_title;
        $guest->notes = $request->notes;
        $guest->save();
        return redirect()->route('guests.show', $guest);
    }

    public function destroy(Guests $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index');
    }
}
