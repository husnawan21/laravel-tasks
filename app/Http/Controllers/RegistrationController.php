<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store(RegistrationRequest $request)
  {

    User::create($request->all());

    return redirect('/')->with('success', 'Thank you, you are now already registered.');
  }
}
