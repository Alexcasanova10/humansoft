<?php

namespace App\Http\Controllers;
use App\Models\modelPendientes;

use Illuminate\Http\Request;

class controllerPendientes extends Controller
{
    public function store(Request $request)
    {
        // Validar el request
        $request->validate([
            'texto' => 'required|string|max:255',
        ]);

        // Crear el pendiente
        $pendiente = modelPendientes::create([
            'texto' => $request->input('texto'),
            'estado_task' => 'pendiente'
        ]);

        // Retornar la respuesta en JSON
        return response()->json($pendiente);
    }

    public function update(Request $request, $id)
    {
        $pendiente = modelPendientes::findOrFail($id);
        $pendiente->estado_task = 'completado';
        $pendiente->save();

        return response()->json($pendiente);
    }

    public function destroy($id)
    {
        $pendiente = modelPendientes::findOrFail($id);
        $pendiente->delete();

        return response()->json(['message' => 'Pendiente eliminado']);
    }


    public function index()
    {
        $pendientes = modelPendientes::where('estado_task', 'pendiente')->get();
        return view('dashboard', compact('pendientes'));
    }









}
