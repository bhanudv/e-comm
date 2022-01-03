<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index() {

        $brands = Brand::all();
     
        return view('brands', [
            'brands' => $brands
        ]);
    }

    public function store() {

        $brand = new Brand();
        $brand->name = request('name');
        $brand->save();

        return redirect('/');
    }

    public function destroy() {

    }

    public function show() {

    }

    public function create() {
        
    }
}
