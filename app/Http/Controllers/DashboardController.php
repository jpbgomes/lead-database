<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'clients');

        return view('dashboard', compact('tab'));
    }
}
