<?php

namespace App\Http\Controllers;

use App\Models\EmailNotifications;
use Illuminate\Http\Request;

class EmailNotifController extends Controller
{

    public function __construct(){

    }
    public function index()
    {
        $email_notifications = EmailNotifications::all();

        return view('emailnotifs.index', compact('email_notifications'));
    }

    public function create()
    {
        return view('emailnotifs.create');
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
        $email_notification = new EmailNotifications;
        $email_notification->emailed_from = $request->emailed_from;
        $email_notification->emailed_to = $request->emailed_to;
        $email_notification->email_subject = $request->email_subject;
        $email_notification->email_content = $request->email_content;
        $email_notification->save();

        // Redirect to user index page with success message
        return redirect()->route('email_notifications.index');
    }

    public function show(EmailNotifications $email_notification)
    {
        return view('emailnotifs.show', ['email_notification' => $email_notification]);
    }

    public function edit(EmailNotifications $email_notification)
    {
        return view('emailnotifs.edit', compact('email_notification'));
    }

    public function update(Request $request, EmailNotifications $email_notification)
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

        $email_notification->emailed_from = $request->emailed_from;
        $email_notification->emailed_to = $request->emailed_to;
        $email_notification->email_subject = $request->email_subject;
        $email_notification->email_content = $request->email_content;
        $email_notification->save();
        return redirect()->route('email_notifications.show', $email_notification);
    }
    public function destroy(EmailNotifications $email_notification)
    {
        $email_notification->delete();
        return redirect()->route('email_notifications.index');
    }
}
