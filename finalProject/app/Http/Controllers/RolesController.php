<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;


class RolesController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|unique:roles,name',
            'description' => 'required',
        ]);

        // Create new role
        $role = new Role;
        $role->id = $request->id;
        $role->name = $request->name;
        $role->description = $request->description;

        $role->save();

        // Redirect to roles index page with success message
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function show(Role $role)
    {
        return view('roles.show', ['role' => $role]);
    }

    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|unique:roles,name',
            'description' => 'required',
        ]);

        //update role
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();

        //redirect to roles show page
        return redirect()->route('roles.show', $role);
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
