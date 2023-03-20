<?php

use App\Http\Controllers\EmailNotifController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestEAController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffEAController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\UserController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', IndexController::class);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $upcomingEvents = Event::where('start_date', '>=', now())
            ->orderBy('start_date', 'desc')
            ->take(3)
            ->get();

        $pastEvents = Event::where('start_date', '<=', now())
            ->orderBy('start_date', 'desc')
            ->take(3)
            ->get();
        if ($pastEvents->isEmpty()) {
            $pastEvents = null; // Define a default value for $pastEvents
        }
        return view('dashboard', compact('upcomingEvents', 'pastEvents'));

    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::group(['prefix' => ''], function () {
        Route::resources([
            '/events' => EventsController::class,
            '/guests' => GuestController::class,
            '/staff' => StaffController::class,
            '/users' => UserController::class,
            '/roles' => RolesController::class,
            '/guesteventattendances' => GuestEAController::class,
            '/staffeventassignments' => StaffEAController::class,
            '/statuses' => StatusesController::class,
        ]);
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
