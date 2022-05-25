<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $sliderdata=Service::limit(4)->get();
        return view('home.index',[
           'sliderdata'=>$sliderdata
        ]);
    }

    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {

        if($request->isMethod('post'))
        {
            $credentials = $request->validate([
                'username' => ['required', 'username'],
                'password' => ['required'],
            ]);
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
        }
        else{
            return view('admin.login');
        }
    }




    public function test($id)
    {
        echo "Id Number:",$id;
    }

}
