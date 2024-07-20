<?php

use App\Http\Controllers\controllerEmpleados;
use App\Http\Controllers\controllerAsistencias;
use App\Http\Controllers\controllerVacaciones;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

 
// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/',function(){
    return view('auth.login');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
    //antes ruta name era dashboard, si hay error, mover name a dashboard
})->middleware(['auth', 'verified'])->name('inicio');


Route::get('/empleados', function () {
    return view('views_paneles.empleados');
})->name('empleados');



Route::get('/', [controllerEmpleados::class, 'index']);
Route::get('/empleados', [controllerEmpleados::class, 'index'])->name('empleados');


Route::get('/empleados', [controllerEmpleados::class, 'getEmpleados'])->name('empleados');

Route::get('/empleados/filtrar', [controllerEmpleados::class, 'filtrarEmpleados'])->name('empleados.filtrar');
Route::patch('/update/{id_empleado}', [controllerEmpleados::class, 'update'])->name('empleado.update');

Route::get('/', 'controllerEmpleados@index');
Route::get('/', 'controllerEmpleados@getEmpleados');
Route::post('/save', 'controllerEmpleados@save');

Route::patch('/empleados/{id_empleado}/status', [controllerEmpleados::class, 'actualizarEstado'])->name('empleado.actualizarEstado');
 
Route::patch('/empleados/{id_empleado}/reactivar', [controllerEmpleados::class, 'reactivarEmp'])->name('empleado.reactivarEmp');


Route::get('/empleados/{id_empleado}/editar', [controllerEmpleados::class, 'edit'])->name('empleado.editar');
Route::patch('/empleados/{id_empleado}', [controllerEmpleados::class, 'update'])->name('empleado.update');




Route::get('/asistencias', function () {
    return view('views_paneles.asistencias');
})->name('asistencias');

Route::get('/justi_Asista', function () {
    return view('views_paneles.justi_Asista');
})->name('justi_Asista');

 
 
Route::get('/asistencias', [controllerAsistencias::class, 'getEmpleadosAsist'])->name('asistencias');
Route::post('/asistencias', [controllerAsistencias::class, 'storeAsistencias'])->name('store_asistencias');
 
Route::get('/justi_Asista', [controllerAsistencias::class, 'justificarAsistencia'])->name('justi_Asista');
Route::post('/guardar_justificacion', [controllerAsistencias::class, 'guardarJustificacion'])->name('guardar_justificacion');

Route::post('/guardar-justificacion', [controllerAsistencias::class, 'guardarJustificacion'])->name('guardar_justificacion');






Route::get('/nominas', function () {
    return view('views_paneles.nominas');
})->name('nominas');
 


Route::get('/agregar_vacaciones', function () {
    return view('views_paneles.agregar_vacaciones');
})->name('agregar_vacaciones');

Route::get('/editar_vac', function () {
    return view('views_paneles.editar_vac');
})->name('editar_vac');

Route::get('/vacaciones', function () {
    return view('views_paneles.vacaciones');
})->name('vacaciones');



Route::get('/vacaciones', [controllerVacaciones::class, 'index'])->name('vacaciones');

Route::get('/agregar_vacaciones', [controllerVacaciones::class, 'showAgregarVacaciones'])->name('agregar_vacaciones');

Route::post('/guardar-vacaciones', [controllerVacaciones::class, 'store'])->name('store_vacaciones');




Route::get('/vacaciones/{id_vacaciones}/editar', [controllerVacaciones::class, 'edit'])->name('editar_vac');
Route::put('/vacaciones/{id_vacaciones}', [controllerVacaciones::class, 'update'])->name('actualizar_vac');
Route::delete('/vacaciones/{id_vacaciones}', [controllerVacaciones::class, 'destroy'])->name('eliminar_vac');








Route::get('/agregar_emp', function () {
    return view('views_paneles.agregar_emp');
})->name('agregar_emp');

 
Route::get('/editar_emp', function () {
    return view('views_paneles.editar_emp');
})->name('editar_emp');
 
Route::get('/configuracion', function () {
    return view('configuraciones.configuracion');
})->name('configuracion');

Route::get('/perfil', function () {
    return view('configuraciones.perfil');
})->name('perfil');



Route::get('/errorPNT', function () {
    return view('views_paneles.errorPNT');
})->name('errorPNT');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
