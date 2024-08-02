<?php

use App\Http\Controllers\controllerEmpleados;
use App\Http\Controllers\controllerAsistencias;
use App\Http\Controllers\controllerVacaciones;
use App\Http\Controllers\controllerNominas;
use App\Http\Controllers\controllerDashboard;
use App\Http\Controllers\controllerPendientes;

use App\Http\Controllers\controllerConfiguracion;
 use App\Http\Controllers\CalendarController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

 

Route::get('/',function(){
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('inicio');


    //antes ruta name era dashboard, si hay error, mover name a dashboard


Route::get('/empleados', function () {
    return view('views_paneles.empleados');
})->name('empleados');



 
Route::get('/empleados', [controllerEmpleados::class, 'index'])->name('empleados');


Route::get('/empleados', [controllerEmpleados::class, 'getEmpleados'])->name('empleados');

Route::get('/empleados/filtrar', [controllerEmpleados::class, 'filtrarEmpleados'])->name('empleados.filtrar');
Route::patch('/update/{id_empleado}', [controllerEmpleados::class, 'update'])->name('empleado.update');


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
 
 
Route::get('/nominas', [controllerNominas::class, 'index'])->name('nominas');
Route::post('/guardar_nomina', [controllerNominas::class, 'guardar'])->name('guardar_nomina');



 

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

Route::get('/dashboard', [controllerDashboard::class, 'index'])->name('dashboard');


Route::post('/configuracion/actualizar', [controllerConfiguracion::class, 'actualizar'])->name('configuracion.actualizar');

Route::post('/configuracion/actualizarNombre', [controllerConfiguracion::class, 'actualizarNombre'])->name('configuracion.actualizarNombre');



Route::get('/configuracion/mostrar', [controllerConfiguracion::class, 'mostrar'])->name('configuracion.index');


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


/*Route::get('/dashboard', [ControllerEmpleados::class, 'contarEmpleadosActivos'])->name('dashboard');
Route::get('/dashboard', [controllerAsistencias::class, 'contarAsistencia'])->name('dashboard');*/

Route::get('/dashboard', [controllerDashboard::class, 'mostrarDashboard'])->name('dashboard');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::get('/dashboard', [controllerDashboard::class, 'mostrarDashboard'])->name('dashboard');
Route::post('/pendientes', [controllerDashboard::class, 'storePendiente'])->name('pendientes.store');
Route::put('/pendientes/{id}', [controllerDashboard::class, 'updatePendiente'])->name('pendientes.update');
Route::delete('/pendientes/{id}', [controllerDashboard::class, 'deletePendiente'])->name('pendientes.destroy');


 Route::get('calendar',[CalendarController::class,'index'])->name('calendar.indexado');
 Route::post('/calendar/store', [CalendarController::class, 'store'])->name('calendar.store');

 Route::post('/calendar/destroy', [CalendarController::class, 'destroy'])->name('calendar.destroy');

require __DIR__.'/auth.php';
