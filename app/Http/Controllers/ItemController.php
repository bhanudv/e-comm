<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
   public function index() {
      return view('item/index');
   }

   public function create() {
      return view('item/create');
   }

   public function destroy() {

   }

   public function show() {
      return view('item/show');
   }

   public function store() {
       
   } 
}
