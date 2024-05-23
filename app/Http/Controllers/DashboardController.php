<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function dashboard(): Response
    {
        return Inertia::render('Dashboard', [
            'user' => Auth::user()
        ]);
    }
}
