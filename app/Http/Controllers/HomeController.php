<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');


        # code...
        $books = Book::count();
        $user = User::where('roles_id', '2')->count();
        return view('home', compact('books', 'user'));
    }
    public function books()
    {
        $books = Book::count();
        $user = User::where('roles_id', '2')->count();
        return view('home', compact('books', 'user'));
    }
}
