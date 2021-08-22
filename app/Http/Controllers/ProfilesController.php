<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
   public function index($user) {
       $user = User::findorFail($user);
       return view('home', [
           'user' => $user,
       ]);
   }
}
