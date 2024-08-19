<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use App\Models\User;
use App\Constants\Constants;
use Illuminate\Support\Facades\Route;
use Auth;
class IsUrlAllowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->route("user_id") != Auth::user()->id)
        {
            return response(view('permission-denied'));
        }
        $user_id = Auth::user()->id;
        $user=User::find($user_id);  

        $role_id=$user->role;
        
        if($role_id == Constants::SUPER_ADMIN)
        {
                return $next($request);
        }
        return response(view('permission-denied'));
    }
}
