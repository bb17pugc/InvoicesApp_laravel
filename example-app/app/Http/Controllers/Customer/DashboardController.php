<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
       public function Dashboard()
       {
          return view('customer.dashboard');
       }
}
