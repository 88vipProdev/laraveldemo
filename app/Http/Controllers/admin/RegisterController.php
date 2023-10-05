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

    public function register(Request $request)
    {

        echo "helo";
       
       $data= $request ->validate([
            'username'=>'required|min:8',
            'email'=>'required|email',
            'password' =>'required|min:8',


        ],[

            'username.required' => 'khong duoc bo trong va khong duoc nho hon :min ky tu',
            'email.required'=> 'khong duoc bo trong',
            'password.required' =>'khong duoc bo trong'
        ]);
        

        $datalist = [
            $request->input('username'),
            $request->input('email'),
           $request->input('password'),
            'create_at'=>date('Y-m-d H:i:s')
        ] ;

          
        
            
        $this->model->createUser($datalist);   
            
        
    //     // return $this->redirect('admin.home')->with('msg' , 'dang ky thanh cong');
    }
}
