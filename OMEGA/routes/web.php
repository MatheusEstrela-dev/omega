<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\UsersController;

// Rotas do Home

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('home/termos', function () {
    return view('home.termos');
});

Route::get('home/termos', function () {
    return view('home.termos');
})->name('termos');

Route::get('home/cadastro', function () {
    return view('home.cadastro');
});

// Rotas do Aluno

Route::get('aluno/alunopage', function () {
    return view('aluno.alunopage');
});

Route::get('aluno/alunopage/fichatreino', function () {
    return view('aluno.fichatreino');
});

Route::resource('alunos', AlunoController::class);
// Rotas do Admin

Route::get('admin/adminpage', function () {
    return view('admin.adminpage');
});

Route::get('admin/alunos/users', function () {
    return view('admin.alunos.users');
});

Route::get('admin/alunos/user_edit', function () {
    return view('admin.alunos.user_edit');
});

Route::get('admin/alunos/user_delete', function () {
    return view('admin.alunos.user_delete');
});

Route::get('admin/alunos/user_create', function () {
    return view('admin.alunos.user_create');
});

Route::get('admin/alunos/excluirusuario', function () {
    return view('admin.alunos.excluirusuario');
});

Route::get('admin/exercicios/editarexercicios', function () {
    return view('admin.exercicios.editarexercicios');
});

Route::get('adminpage/', function () {
    return view('admin.excluirusario');
});


// Rotas de Controller

Route::resource('users', UsersController::class);


Route::get('/admin/alunos/users', [UsersController::class, 'index'])->name('users.index');


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Session;


// Rota para processar login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Rota para página do Admin
Route::get('/admin/adminpage', function () {
    if (Session::get('user_role') !== 'admin') {
        return redirect('/login')->withErrors(['auth_error' => 'Acesso não autorizado.']);
    }

    return view('admin.adminpage'); // Certifique-se de que esta view exista
});

// Rota para página do Aluno
Route::get('/aluno/alunopage', function () {
    if (Session::get('user_role') !== 'aluno') {
        return redirect('/login')->withErrors(['auth_error' => 'Acesso não autorizado.']);
    }

    return view('aluno.alunopage'); // Certifique-se de que esta view exista

});

use App\Http\Controllers\ExerciciosController;

Route::resource('admin/exercicios', ExerciciosController::class);
