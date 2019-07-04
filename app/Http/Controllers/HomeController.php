<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

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
        $okul = Student::all(); //paginate(3);  //Database veri alma kısmı
        return view('home', compact('okul'));
    }


}
