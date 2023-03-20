<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;


class RolesController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $roles = Roles::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
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
        $role = new Roles;
        $role->id = $request->id;
        $role->name = $request->name;
        $role->description = $request->description;

        $role->save();

        // Redirect to user index page with success message
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function show(Roles $role)
    {
        return view('roles.show', ['role' => $role]);
    }

    public function edit(Roles $role)
    {
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, Roles $role)
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

        $role->name = $request->name;
        $role->description = $request->description;

        $role->save();
        return redirect()->route('roles.show', $role);
    }
    public function destroy(Roles $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
