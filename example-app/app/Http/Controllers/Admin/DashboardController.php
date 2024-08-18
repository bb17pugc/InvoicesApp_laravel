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


class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

}
