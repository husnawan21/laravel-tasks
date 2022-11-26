<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
  public function index(Request $request, $identifier)
  {
    return view('profile', ['username' => $identifier]);
  }
}
