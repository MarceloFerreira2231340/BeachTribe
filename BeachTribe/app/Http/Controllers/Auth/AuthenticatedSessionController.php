<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Redirecionar após login.
     */
    protected function authenticated(Request $request, $user)
    {
        // Se o utilizador for admin, redireciona para o admin dashboard.
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Caso contrário, redireciona para a página inicial (index).
        return redirect()->route('index');
    }

    /**
     * Terminar a sessão do utilizador.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
