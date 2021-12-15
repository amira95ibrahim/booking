<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function editProfile()
    {

        $admin = Admin::find(auth('admin')->user()->id);

        return view('Admin.profile', compact('admin'));

    }

    public function updateProfile(ProfileRequest $request)
    {
        //validate
        // db

        try {

            $admin =Admin::find(auth('admin')->user()->id);


            if ($request->filled('password')) {
                $request->merge(['password' => bcrypt($request->password)]);
            }else{
                $passward= $admin->password;
                $request->request->add(['password'=>  $passward]);
            }

            $admin->update($request->all());
           
            return redirect()->back()->with(['success' => '  updated successfuly']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'there are some errors']);

        }

    }


}