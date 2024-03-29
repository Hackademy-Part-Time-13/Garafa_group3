<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     
        $arrayOfLanguage = explode('_', $request->getPreferredLanguage() );
         $localeLanguage = session('locale',$arrayOfLanguage[0]);
         App::setLocale($localeLanguage);
        return $next($request);
      
    }
}
