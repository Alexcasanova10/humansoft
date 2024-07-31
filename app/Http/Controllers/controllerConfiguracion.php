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


    public function actualizarNombre(Request $request)
    {
      // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Actualizar el nombre del sitio en la base de datos
        DB::table('configuracion')->where('key', 'nombre_sitio')->update([
            'value' => $request->input('nombre'),
        ]);

        return redirect()->route('configuracion.index')->with('success', 'Configuración actualizada.');
    }


    public function mostrar()
    {
        // Obtener la configuración actual
        $configuracion = DB::table('configuracion')->where('key', 'nombre_sitio')->first();

        return view('configuracion', ['configuracion' => $configuracion]);
    }
















    
}
