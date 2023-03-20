<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Event;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {

        $upcomingEvents = Event::where('start_date', '>=', now())
            ->orderBy('start_date', 'desc')
            ->take(3)
            ->get();
        return view('index', compact('upcomingEvents'));

    }


}
