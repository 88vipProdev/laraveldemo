<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
        public function loginView()
        {

            return view('admin.login');
        }

        public function login()
        {
            
        }
}
