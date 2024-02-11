<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Obtiene el idioma de la sesión
        $locale = Session::get('locale');

        // Si no hay un idioma almacenado en la sesión, usa el idioma predeterminado de la aplicación
        if (!$locale) {
            $locale = config('app.locale');
        }

        // Establece el idioma de la aplicación
        App::setLocale($locale);

        return $next($request);
    }
}
