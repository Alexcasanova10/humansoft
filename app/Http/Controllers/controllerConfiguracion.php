<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 use Illuminate\Support\Facades\DB;


class controllerConfiguracion extends Controller
{
    public function actualizar(Request $request)
    {
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = 'logoGral.' . $logo->getClientOriginalExtension();
            $logoPath = $logo->storeAs('multimedia', $logoName, 'public');

            return back()->with('success', 'Configuración actualizada correctamente.');
        }

        return back()->with('error', 'Por favor, seleccione un archivo válido.');
    }
















    
}
