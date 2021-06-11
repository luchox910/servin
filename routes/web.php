 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/333', function () {
    return view('welcome');
});



route::get('borra/{id}', 'clientesController@borra')->name('borra');
route::get('borra_cli/{id}', 'clientesController@borra_cli')->name('borra_cli');
route::get('editusers/{id}', 'clientesController@editusers')->name('editusers');


Route::post('grabar_pre', 'prefijosController@store')->name('grabar_pre');
route::get('borra_pre/{id}', 'prefijosController@borra_pre')->name('borra_pre');
route::get('edit_pre/{id}', 'prefijosController@edit_pre')->name('edit_pre');


route::post('update_pre', 'prefijosController@update_pre')->name('update_pre');
Route::get('show_pre', 'prefijosController@lista_pre')->name('show_pre');
Route::get('/create_pre', function () {
    return view('prefijos.create_pref');
})->name('create_prefijo');



Route::get('/', 'clientesController@index')->name('estadisticas');
Route::get('regx', 'clientesController@regis')->name('regx');
Auth::routes();
//Auth::routes(['register' => false]);


    //Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    //Route::post('register', 'Auth\RegisterController@register');


Route::get('showusers', 'clientesController@lista_users')->name('showusers');


Route::get('/create', function () {
    return view('clientes.create');
})->name('crear');

Route::get('/mostrar', function () {
    return view('clientes.show');
})->name('mostrar');



Route::post('update', 'clientesController@update')->name('update');

Route::post('updateusers', 'clientesController@updateusers')->name('updateusers');


Route::post('grabar', 'clientesController@store')->name('grabar');
//route::post('borrar', 'clientesController@destroy')->name('destroy');

Route::resource('clientes','clientesController');

Route::get('listaclientes','clientesController@lista')->name('listar');

Route::get('home', 'clientesController@index')->name('estadisticas');




///////////metodos para la lista de trabajos

//Route::resource('catx','clientesController');

//Route::get('/crear item', function () {
    //return view('listadot.create');
//})->name('crearitem');

Route::get('crear item','tpreciosController@create')->name('crear_item');

Route::get('catalogo','tpreciosController@lista')->name('listacatalogo');

Route::post('grabaritem', 'tpreciosController@store')->name('grabaritem');

Route::post('updatecatalogo/{id}', 'tpreciosController@update')->name('updatecat');

route::get('borrac/{id}', 'tpreciosController@borra')->name('borrac');

route::get('catalogoedit/{id}', 'tpreciosController@edit')->name('editcat');

Route::get('listadocat', 'tpreciosController@lista')->name('listadototalc');

//agenda


//Route::get('/crear_servicio', function () {
    //return view('agenda.create');
//})->name('crear_servicio');

Route::get('crear_servicio','agendaController@create')->name('crear_servicio');


Route::get('/busqueda', function () {
    return view('agenda.busqueda');
})->name('busqueda');


Route::get('lista_agenda','agendaController@listado')->name('lista_agenda');

Route::post('grabaservicio','agendaController@store')->name('grabarServicioC');

route::get('vnovedad/{id}', 'agendaController@ver_novedad')->name('vnovedad');


route::get('gdetalle/{id}', 'agendaController@gdetalle')->name('gdetalle');

Route::post('grabaritems', 'agendaController@grabadetalle')->name('grabaritemd');

Route::get('editar_servicio/{id}', 'agendaController@editca')->name('editca');

Route::get('eliminar/{id}', 'agendaController@borra')->name('estado99');

Route::post('update_servicioca/{id}', 'agendaController@update')->name('update_servicio_ca');


Route::get('fecha', 'agendaController@fecha')->name('fecha');

Route::get('borra_item/{orden}/{item}', 'agendaController@borra_item')->name('borra_item');



Route::get('/ajax', function () {
    return view('prueba.inicio');
})->name('ajax');


Route::get('/busquedap', function () {
    return view('agenda.busquedap');
})->name('ajax');

Route::get('ajaxg', 'searchController@show')->name('ajaxg');

Route::get('busquedax', 'searchController@show1')->name('busquedax');




Route::get('pru2', 'pruebaController@va')->name('pru2');


Route::get('/send2', 'mailController@enviar_correo1')->name('send2');

Route::get('send1', 'mailController@enviar_correo')->name('send1');

//Route::get('send2/{id}', 'mailController@enviar_correo')->name('send2');


route::get('gdetallec/{id}', 'mailController@gdetalle')->name('gdetallec');

///novedades



route::post('graba_novedad', 'novedadesController@aprueba')->name('graba_novedad');





