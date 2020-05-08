<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicropostController extends Controller
{
    public function index()
  {
    return view('micropost.index');
  }
}
