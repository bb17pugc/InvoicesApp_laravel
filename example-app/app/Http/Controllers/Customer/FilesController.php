<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function UploadFile(Request $request)
    {

        if ($request->isMethod('post')) {
        
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        foreach ($fileContents as $index=>$line) {
            if($index > 0)
            {
                $data = str_getcsv($line);
                return $data[1];
            }
        }
        return redirect()->back()->with('success', 'CSV file imported successfully.');
        }

        return view('customer.files.form');

    }
}
