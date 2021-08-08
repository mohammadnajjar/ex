<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // most be put
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsersController extends Controller
{
   public function showAdminName()
   {
       return 'ahmad';
   }
}
