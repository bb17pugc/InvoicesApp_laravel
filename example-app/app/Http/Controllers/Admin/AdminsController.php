<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Constants\Constants;
use Response;
use Illuminate\Support\Facades\Hash;
class AdminsController extends Controller
{
            /**
     * Display a listing of the resource.
     */
    public function writePassword()
    {
        Storage::put('password.txt', Hash::make($_GET['password']));
        Session::flash('message', 'Password updated successfully'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();

    }

    public function Users()
    {
          $users = User::with('wallet')->where('status' , '!=' , 0)->get();
         return view('admin.users.index' , ['list'=>$users]);   
    } 

    public function AddOrUpdate(Request $request)
    {
        $user = new User;
        $user->role = Constants::USER;
        if(isset($_GET['id']))
        {
            $id  = $_GET['id'];
            $user = User::find($id);
        }
        if ($request->isMethod('post')) {

            $id = $request->input('id'); 
            if($id > 0)
            {
                $validated = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email:unique:users|max:255',
                    
                ]);
             $user = User::find($id);
            }
            else 
            {
                $validated = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email:unique:users|max:255',
                    'password' => 'min:8',
                ]);
            }
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                
                $user->password =$request->input('password') == ""? $user->password : Hash::make($request->input('password')) ;
                $user->save();


                if($id > 0)
                {
                    Session::flash('message', 'User updated successfully'); 
                    Session::flash('alert-class', 'alert-success'); 
    
                }    
                else 
                {
                    Session::flash('message', 'User added successfully'); 
                    Session::flash('alert-class', 'alert-success');     
                }
            }
        return view('admin.users.AddOrUpdate', ['user' => $user]);   
    }  

    public function ChangeUserStatus()
    {
        try {
        $user_id=$_GET['id'];
        $status=$_GET['status'];
        $user = User::find($user_id);
        $user->status=$status;
        $user->save();

        return Response::json([
            'user'=> $user
        ], Constants::SUCCESS);

     } catch (\Exception $e) {
        return Response::json([
            'message'=> $e->getMessage()
        ], Constants::SERVER_ERROR);
      }
    }

    public function UserDetails()
    {
        $user_id=$_GET['id'];
        $user = User::find($user_id);
        return view('admin.users.user_details', ['user'=>$user]);
    }

    public function AllAppUsers()
    {   
        $users = User::where('role' , '=' , Constants::USER)->get();
        return view('admin.app_users.index' , ['list'=>$users]);   
    }


}
