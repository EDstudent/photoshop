<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use function redirect;
class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      
        //if(!(Auth::user()->isUser() || Auth::user()->isAdmin() || Auth::check()))//not correct 
        if(!(Auth::user()->isUser() || Auth::user()->isAdmin()))    //Call to a member function isUser() on nul   
            return redirect('/')->withErrors('Access denied to User functionality!');
        return $next($request);
    }
}

