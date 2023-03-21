<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6|max:255',
            'role_id' => 'required|integer',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Create new user
        $user = new User;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->save();

        // Redirect to user index page with success message
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6|max:255',
            'role_id' => 'required|integer',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Create new user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->profile_picture = $request->profile_picture;
        $user->save();

        //redirect to user show page.
        return redirect()->route('users.show', $user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
