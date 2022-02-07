<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Item;

class HomeController extends Controller
{
    public function index() {
    
        return redirect()->route('subcategory.index');
    }
}
