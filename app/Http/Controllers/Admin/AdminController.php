<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public $adminUser;
    protected $guard = 'admin';

    public function login(){
        return view('admin.login');
    }


     public function loginpost(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back();


     }

    public function logout()
    {

        $gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('admin.login');
    }


    


    private function getGaurd()
    {
        return auth('admin');
    }
    public function index(){
        return view('admin.index');
    }
}
