<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Setting;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Constants\Constants;
use Response;
use Illuminate\Support\Facades\Hash;


class SettingsController extends Controller
{
    public function Form(Request $request)
    {   
        $Setting = Setting::where("id", '=', 1)->first();
        if ($request->isMethod('post')) {
            $Setting->comission = $request->input("comission");
            $Setting->save();
            Session::flash('message', 'Setting updated successfully'); 
            Session::flash('alert-class', 'alert-success'); 
        }
        return view('admin.settings', ['Setting'=>$Setting]); 
    }

}
