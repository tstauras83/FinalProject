<?php

namespace App\Http\Controllers;

use App\Models\Roles;
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
        $user = new User;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->profile_picture = $request->profile_picture;
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
/*        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8|confirmed',
            'role_id' => 'required|in:1,2,3',
            'phone_number' => 'nullable|numeric',
            'address' => 'nullable|max:255',
            'profile_picture' => 'nullable|url'
        ]);*/

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->profile_picture = $request->profile_picture;
        $user->save();
        return redirect()->route('users.show', $user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
