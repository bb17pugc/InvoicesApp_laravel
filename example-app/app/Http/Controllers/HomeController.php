<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constants\Constants;

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
        $role = Auth::user()->role;
        if($role == Constants::SUPER_ADMIN)
        {
            return redirect()->route('dashboard', ['user_id'=>Auth::user()->id]); 
        }
        else 
        {
            return redirect()->route('upload-csv-file-result', ['payment_id'=>$Payment->id, 'user_id'=>Auth::user()->id]); 
        }
        return view('home');
    }
}
