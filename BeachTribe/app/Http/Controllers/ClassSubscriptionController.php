<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSubscription;
use Illuminate\Support\Facades\Auth;

class ClassSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Verifica se o utilizador está autenticado
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Precisas de iniciar sessão para te inscrever.');
        }

        // Obtem o utilizador atual
        $user = Auth::user();

        // Valida o ID da aula
        $validated = $request->validate([
            'classes_id' => 'required|exists:classes,id',
        ]);

        // Verifica se o utilizador já está inscrito na aula
        $alreadySubscribed = \DB::table('class_subscriptions')
            ->where('classes_id', $validated['classes_id'])
            ->where('users_id', $user->id)
            ->exists();

        if ($alreadySubscribed) {
            return redirect()->back()->with('error', 'Já estás inscrito nesta aula.');
        }

        // Cria a inscrição
        ClassSubscription::create([
            'classes_id' => $validated['classes_id'],
            'users_id' => $user->id,
        ]);

        return redirect()->back()->with('success', 'Inscrição efetuada com sucesso!');
    }
}

