<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function completeProfile()
    {
        return Inertia::render('Profile/Complete');
    }
}
