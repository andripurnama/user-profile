<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->query('verified')) {
            return redirect()->route('complete.profile');
        }
        return Inertia::render('Dashboard', [
            'user' => Auth::user()
        ]);
    }
}
