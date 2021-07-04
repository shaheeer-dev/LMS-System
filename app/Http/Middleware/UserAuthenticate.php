<?php
namespace App\Http\Middleware;
use Auth;
use Closure;
class UserAuthenticate
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
      $usertype= Auth::user()->usertype;

      if($usertype == 1)
      {

        return redirect('addashboard');
      }

      elseif($usertype == 2)
{
       return redirect('TutorDashboard');
      }
      elseif($usertype == 3)
{
       return redirect('student-dashboard');
      }
      else{

        return abort(404);
      }
      

     
}
}