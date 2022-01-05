<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return $categories;
    }

    public function store() {

    }

    public function show() {

    }

    public function destroy() {

    }

    public function create() {
        
    }
}
