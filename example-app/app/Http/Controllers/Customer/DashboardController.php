<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\CsvFile;
use App\Models\Wallet;
use App\Models\Payment;
use \Carbon\Carbon; 

class DashboardController extends Controller
{
       public function History()
       {
         
       }
       public function Dashboard()
       {
          $user_id=Auth::user()->id;
          $TotalFiles= CsvFile::where('user_id', '=', $user_id)->count();
          $TotalCredits=Wallet::where('user_id', '=', $user_id)->first()->balance;
          $CreditThisMonth=Wallet::where('user_id', '=', $user_id)->first()->balance;;
          $TotalCustomers=Payment::where('user_id', '=', $user_id)->sum('total_records');
          $LastCredit=Wallet::where('user_id', '=', $user_id)->first()->updated_at;
          $TodayFiles=CsvFile::whereDate('created_at', Carbon::now())->where('user_id', '=', $user_id)->get()->count();
          
          return view('customer.dashboard', [
            'TotalFiles'=>$TotalFiles,
            'TotalCredits'=>$TotalCredits,
            'CreditThisMonth'=>$CreditThisMonth,
            'TotalCustomers'=>$TotalCustomers,
            'LastCredit'=>$LastCredit,
            'TodayFiles'=>$TodayFiles
          ]);
       }
}
