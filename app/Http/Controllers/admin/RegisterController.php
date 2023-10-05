<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model= new register();
    }
    public function registerView()
    {
        return view('admin.register');
    }

    public function register(request $request)
    {

        echo "helo";
        $request->validate([
            'username'=>'required|min:8',
            'email'=>'required|email',
             'password' => 'required|min:8|confirmed',
        ],[
            'username.required'=>'Full name cannot be left blankHo',
            'email.required'=>'Full name must not be less than 8 characters',
            'password.required'=>'password must be identical'

        ]);      


        $datalist = [
          'username'=>$request->input('username'),
          'email'=> $request->input('email'),
           'password'=>$request->input('password'),
            'create_at'=>date('Y-m-d H:i:s')
        ];
            
        $this->model->createUser($datalist);    
        return $this->redirect('admin.home')->with('msg' , 'dang ky thanh cong');
  
    }
}
