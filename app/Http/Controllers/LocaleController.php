<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        // Validar que el idioma seleccionado sea válido
        $supportedLocales = ['en', 'es']; // Lista de idiomas admitidos
        if (!in_array($locale, $supportedLocales)) {
            abort(404); // Mostrar página no encontrada si el idioma no es válido
        }

        // Almacenar el idioma seleccionado en la sesión
        Session::put('locale', $locale);

        // Redireccionar a la página de inicio después de establecer el idioma
        return redirect()->route('dashboard'); // Cambia 'home' por el nombre de la ruta que deseas redirigir
    }
}
