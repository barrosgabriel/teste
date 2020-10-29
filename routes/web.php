<?php

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

use Illuminate\Database\Eloquent\Collection;
Route::get('/', function() {
    return view('inicial');
});

Route::get('/', 'AdminController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/cadastro', function () {
        return view('cadastro');
    })->name('cadastro');
    
    Route::get('/cadastro', function () {
        return view('cadastro');
    })->name('cadastro');
    
    Route::get('/matricula', function () {
        return view('alunos/matricula');
    })->name('matricula');

    Route::post('/matricula', 'AlunosController@store');
    
    Route::get('/CadTurma', function () {
        return view('turma/CadTurma');
    })->name('CadTurma');
    Route::post('/CadTurma', 'TurmaController@store');

    Route::get('/listarAlunos', function () {
        return view('alunos/listarAlunos');
    })->name('listarAlunos');

    Route::get('/listarTurmas', function () {
        return view('turma/listarTurmas');
    })->name('listarTurmas');
    
});

Route::get('/', function (){
    return view('inicial');
    
})->name('inicial');


Route::get('/lista', function() {
    $collection = collect([
        ['id' => 1, 'name' => 'Gabriel','surname' => 'Barros', 'age' => 25],
        ['id' => 2, 'name' => 'João', 'surname' => 'Silva', 'age' => 33],
        ['id' => 3, 'name' => 'Maria', 'surname' => 'Souza', 'age' => 56],
        ['id' => 4, 'name' => 'Cleber', 'surname' => 'Santos', 'age' => 48],
    ]);
    //dd($collection);
    $cadastros = json_decode(json_encode($collection));
    // dd($cadastros);
    return view('tabela', compact('cadastros'));
})->name('lista');


Route::get('/pdf',function() {
    $collection = collect([
        ['id' => 1, 'name' => 'Gabriel','surname' => 'Barros', 'age' => 25],
        ['id' => 2, 'name' => 'João', 'surname' => 'Silva', 'age' => 33],
        ['id' => 3, 'name' => 'Maria', 'surname' => 'Souza', 'age' => 56],
        ['id' => 4, 'name' => 'Cleber', 'surname' => 'Santos', 'age' => 48],
    ]);
    $cadastros = json_decode(json_encode($collection));
    $pdf = \PDF::loadView('pdf', compact('cadastros'));
    return $pdf->stream('exemplo.pdf');
})->name('pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');