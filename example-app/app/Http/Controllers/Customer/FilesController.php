<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CsvFile;
use App\Models\Payment;
use App\Models\Setting;

use Illuminate\Support\Str;
use Auth;

class FilesController extends Controller
{
    public function Result($user_id,$payment_id)
    {
        $payment = Payment::with('user', 'file')->where('id','=',$payment_id)->first();
        $fileContents = file(public_path()."/uploaded_files/".$payment->file->path);
        return view('customer.files.result', ['payment'=>$payment, 'fileContents'=>$fileContents]);
    }
    public function UploadFile(Request $request)
    {

        if ($request->isMethod('post')) {
        
        $csvFile=new CsvFile;    
        $file = $request->file('file');
        $fileContents = file($file->getPathname());
        $destinationPath = public_path()."/uploaded_files/";
        $uniqid = Str::random(9);
        $FileName=$uniqid.".".$file->getClientOriginalExtension();
        $file->move($destinationPath,$FileName);
        

        $csvFile->path = $FileName;
        $csvFile->user_id = Auth::user()->id;   
        $csvFile->save();
        $rate_per_row=Setting::first()->comission;    

        $fileContents = file($destinationPath.$FileName);
        $total_payment = (count($fileContents)-1) * $rate_per_row;

        $Payment = new Payment;
        $Payment->total_payment = $total_payment;
        $Payment->rate_per_row = $rate_per_row;
        $Payment->total_records = count($fileContents)-1;
        $Payment->csv_files_id = $csvFile->id;
        $Payment->user_id = Auth::user()->id;   
        $Payment->save();
        // foreach ($fileContents as $index=>$line) {
        //     if($index > 0)
        //     {
        //         $data = str_getcsv($line);
        //         return $data[1];
        //     }
        // }
        return redirect()->route('upload-csv-file-result', ['payment_id'=>$Payment->id, 'user_id'=>Auth::user()->id]); 
        }

        return view('customer.files.form');

    }
}
