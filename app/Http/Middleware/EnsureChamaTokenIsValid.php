<?php

namespace App\Http\Middleware;

use App\Models\Chama;
use App\Models\Member;
use App\Models\Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureChamaTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $session = Session::where('user_id', request()->user()->id)->first();
        $member = request()->user()->members()->first();

        if(is_null($session->chama_id) && !request()->routeIs('chama.create')) return redirect(route('chama.create')); 

        if(is_null($session->chama_id) && !empty($member)){
            Session::where('user_id', request()->user()->id)->update([
                'chama_id' => $member->chama_id,
            ]);
        }

        if($session->chama || !is_null($session->chama_id) && request()->routeIs('chama.create')){
            $chama = Chama::find($member->chama_id);
            $request->session()->put('chama', $chama);
        }

        return $next($request);
    }
}
