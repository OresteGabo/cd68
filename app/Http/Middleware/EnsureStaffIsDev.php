<?php

namespace App\Http\Middleware;

use App\Models\Staff;
use Closure;
use Illuminate\Http\Request;

class EnsureStaffIsDev
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user_id=auth()->user()->id;
        $staffMember = Staff::where('user_id', $user_id)->first();
        if($staffMember!=null && $staffMember->is_dev){
            return $next($request);
        }
        abort(403);// or return redirect('home');
    }
}
