<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {

        return Category::where('parentid','=',0)->with('children')->get();
    }
    public function index()
    {
        $page='home';
        $sliderdata=Service::limit(4)->get();
        $servicelist1=Service::limit(6)->get();
        return view('home.index',[
            'page'=>$page,
           'sliderdata'=>$sliderdata,
            'servicelist1'=>$servicelist1
        ]);
    }
    public function service($id)
    {
        $data=Service::find($id);
        $images= DB::table('images')->where('service_id',$id)->get();

        return view('home.service',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function categoryservices($id)
    {

        $category=Category::find($id);
        $services= DB::table('services')->where('category_id',$id)->get();
        return view('home.categoryservices',[
            'category'=>$category,
            'services'=>$services
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
