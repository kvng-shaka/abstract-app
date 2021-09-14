<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    
    public function awaiting()
    {
        return view('awaiting');
    }
}
