<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecController extends Controller
{
    public function index() {
        return view('spec');
    }
}
