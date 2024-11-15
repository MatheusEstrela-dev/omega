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
