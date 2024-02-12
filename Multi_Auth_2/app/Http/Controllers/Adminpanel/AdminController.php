<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;

class AdminController extends Controller {
    public function index() {
        return view('admin.dashboard');
    }
}
