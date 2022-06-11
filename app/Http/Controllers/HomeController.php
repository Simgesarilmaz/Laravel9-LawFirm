<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {

        return Category::where('parentid', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $page = 'home';
        $sliderdata = Service::limit(4)->get();
        $servicelist1 = Service::limit(6)->get();
        $setting = Setting::first();
        $datalist = Faq::all();

        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'servicelist1' => $servicelist1,
            'datalist' => $datalist
        ]);
    }

    public function about()
    {
        $setting = Setting::first();

        return view('home.about', [
            'setting' => $setting,

        ]);
    }

    public function references()
    {

        $setting = Setting::first();

        return view('home.references', [
            'setting' => $setting,

        ]);
    }

    public function contact()
    {

        $setting = Setting::first();

        return view('home.contact', [
            'setting' => $setting,

        ]);
    }
    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();

        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist,

        ]);
    }

    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=$request->ip();
        $data->status=$request->status;
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent,Thank you.');

    }
    public function storecomment(Request $request)
    {
        //dd($request);
        $data = new Comment();
        $data->user_id =Auth::id();
        $data->service_id = $request->input('service_id');
        $data->subject = $request->input('subject');
        $data->comment = $request->input('comment');
        $data->ip=$request->ip();
        $data->rate=$request->input('rate');;
        $data->save();
        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your comment has been sent,Thank you.');

    }

    public function service($id)
    {
        $data = Service::find($id);
        $images = DB::table('images')->where('service_id', $id)->get();
        $review=Comment::where('service_id',$id)->where('status', 'True')->get();
        return view('home.service', [
            'data' => $data,
            'images' => $images,
            'review'=>$review
        ]);
    }

    public function categoryservices($id)
    {

        $category = Category::find($id);
        $services = DB::table('services')->where('category_id', $id)->get();
        return view('home.categoryservices', [
            'category' => $category,
            'services' => $services
        ]);
    }


    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {
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
        } else {
            return view('admin.login');
        }
    }


    public function test($id)
    {
        echo "Id Number:", $id;
    }

}
