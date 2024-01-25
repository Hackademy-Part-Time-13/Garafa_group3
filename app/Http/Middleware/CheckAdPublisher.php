<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Ad;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdPublisher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $adId = $request->route('id'); // Assumi che l'ID dell'annuncio sia passato come parametro nella rotta
        $ad = Ad::find($adId);

        if (!$ad || $ad->user_id !== auth()->id()) {
            abort(403, 'Unauthorized'); // Puoi personalizzare il messaggio di errore a tuo piacimento
        }
        return $next($request);
    }
}
