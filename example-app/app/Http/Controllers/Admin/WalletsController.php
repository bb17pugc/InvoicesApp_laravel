<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Constants\Constants;
use App\Models\Wallet;
use Response;
class WalletsController extends Controller
{
    public function Form(Request $request)
    {
        try {
            $wallet = new Wallet;
            if(isset($_GET['customer_id']))
                {
                    $customer_id  = $_GET['customer_id'];
                    $wallet = Wallet::with('user')->where('user_id', '=', $customer_id)->first();
                    if(is_null($wallet))
                    {
                        $wallet = new Wallet;
                        $wallet->id=0;
                    }
                    $wallet->user_id=$customer_id;
                }
                $wallet->balance = 00.0;

                 if ($request->isMethod('post')) {

                    $validated = $request->validate([
                        'balance' => 'required|integer|min:0',
                    ]);
                    
                    $customer_id  = $request->input('customer_id');
                    $balance  = $request->input('balance');
                    $id  = $request->input('id');

                    if($id > 0)
                    {
                        $wallet=Wallet::find($id);
                    }    
                    $wallet->balance = $balance;
                    $wallet->user_id = $customer_id;
                    $wallet->save();
                }

                 return view('admin.wallets.form', ['wallet'=>$wallet]);

        } catch (\Exception $e) {
            return Response::json([
                'message'=> $e->getMessage()
            ], Constants::SERVER_ERROR);
          }
    }
}
