<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $guests = Guest::all();

        return view('guests.index', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:guests,username',
            'email' => 'required|email|unique:guests,email',
            'role_id' => 'required',
            'phone' => 'required',
            'notes' => 'nullable',
        ]);

        // Create new guest
        $guest = new Guest;
        $guest->id = $request->id;
        $guest->name = $request->name;
        $guest->username = $request->username;
        $guest->email = $request->email;
        $guest->role_id = $request->role_id;
        $guest->phone = $request->phone;
        $guest->notes = $request->notes;
        $guest->save();

        // Redirect to guest index page with success message
        return redirect()->route('guests.index')->with('success', 'Guest created successfully.');
    }

    public function show(Guest $guest)
    {
        return view('guests.show', ['guest' => $guest]);
    }

    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, Guest $guest)
    {
        // Validate form input
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:guests,username',
            'email' => 'required|email|unique:guests,email',
            'role_id' => 'required',
            'phone' => 'required',
            'notes' => 'nullable',
        ]);

        // Update Guest
        $guest->name = $request->name;
        $guest->username = $request->username;
        $guest->email = $request->email;
        $guest->role_id = $request->role_id;
        $guest->phone = $request->phone;
        $guest->notes = $request->notes;
        $guest->save();

        //redirect to guest show page
        return redirect()->route('guests.show', $guest);
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index');
    }
}
