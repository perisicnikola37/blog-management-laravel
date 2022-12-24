<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $posts = Post::latest('id')->paginate(4);

        return view('layouts.homepage', compact(
            'posts',
        ));
    }

    // This function returns /homepage on / - url
    public function redirect() {
        return redirect('/homepage');
    }

    public function contact() {
        return view('pages.contact_page');
    }

    public function about() {
        $users = User::all();

        return view('pages.about_page', compact(
            'users',
        ));
    }

    public function profile() {
        $users = User::count();
        $posts = Post::count();
        $user = Auth::user();

        return view('layouts.includes.profile_page_content_section', compact(
            'users',
            'posts',
            'user',
        ));

    }
}
