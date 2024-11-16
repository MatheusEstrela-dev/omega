<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Verificar se o usuário está autenticado
        if (!session('user_id')) {
            return redirect('/login')->withErrors(['auth_error' => 'Você precisa estar logado para acessar esta página.']);
        }

        // Lógica da página do dashboard
        return view('dashboard');
    }
}
