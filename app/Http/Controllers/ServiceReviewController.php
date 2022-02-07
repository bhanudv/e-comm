<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceReviewController extends Controller
{
    public function index() {
        return view('service-review');
    }
}
