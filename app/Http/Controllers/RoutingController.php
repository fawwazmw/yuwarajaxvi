<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function __construct()
    {
        // $this->
        // middleware('auth')->
        // except('index');
    }

    public function index(Request $request)
    {
        if (Auth::user()) {
            return redirect('index');
        } else {
            return redirect('login');
        }
    }

    public function root(Request $request, $first)
    {
        $mode = $request->query('mode');
        $demo = $request->query('demo');

        if ($first == "assets")
            return redirect('home');

        if (view()->exists($first)) {
            return view($first, ['mode' => $mode, 'demo' => $demo]);
        } else {
            return abort(404);
        }
    }

    public function secondLevel(Request $request, $first, $second)
    {
        $mode = $request->query('mode');
        $demo = $request->query('demo');

        if ($first == "assets")
            return redirect('home');

        if (view()->exists("$first.$second")) {
            return view("$first.$second", ['mode' => $mode, 'demo' => $demo]);
        } else {
            return abort(404);
        }
    }

    public function thirdLevel(Request $request, $first, $second, $third)
    {
        $mode = $request->query('mode');
        $demo = $request->query('demo');

        if ($first == "assets")
            return redirect('home');

        if (view()->exists("$first.$second.$third")) {
            return view("$first.$second.$third", ['mode' => $mode, 'demo' => $demo]);
        } else {
            return abort(404);
        }
    }
}
