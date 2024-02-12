<?php

namespace App\Http\Controllers\Vendorpanel;

use App\Http\Controllers\Controller;

class VendorController extends Controller {
    public function index() {
        return view('vendor.dashboard');
    }
}
