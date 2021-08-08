<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller; // most be put
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
   public function showAdminName()
   {
       return 'ahmad';
   }
}
