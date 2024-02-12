<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function index() {
        if (Auth::id()) {
            $userType = Auth()->user()->usertype;
            if ($userType === 'company') {
                return view('Company.dashboard');
            } else if ($userType === 'admin') {
                return view('Admin.dashboard');
            } else if ($userType === 'candidate') {
                return view('Candidate.dashboard');
            } else {
                redirect()->back();
            }
        }
    }

    public function Demo() {
        return view('demo');
    }
}
