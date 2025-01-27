<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassRequest;
use App\Http\Requests\ClassSearchRequest;
use App\Models\Class_;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function index(ClassSearchRequest $request)
    {
        $query = Class_::query();

        if ($request->filled('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', 'LIKE', '%' . $request->type . '%');
        }

        if ($request->filled('state')) {
            $query->where('state', 'LIKE', '%' . $request->state . '%');
        }

        if ($request->filled('date')) {
            $query->where('date', 'LIKE', '%' . $request->date . '%');
        }

        $classes = $query->get();

        return view('_admin.classes.index', compact('classes'));
    }

    public function create()
    {
        $class_ = new Class_;
        return view('_admin.classes.create', compact('class_'));
    }

    public function store(ClassRequest $request)
    {
        $fields = $request->validated();

        $class_ = new Class_;
        $class_->fill($fields);
        $class_->save();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Aula criada com sucesso');
    }

    public function show(Class_ $class_)
    {
        return view('_admin.classes.show', compact('class_'));
    }

    public function edit(Class_ $class_)
    {
        return view('_admin.classes.edit', compact('class_'));
    }

    public function update(ClassRequest $request, Class_ $class_)
    {
        $class_->update($request->all());
        return redirect()->route('admin.classes.index')->with('success', 'Aula atualizada com sucesso!');
    }

    public function destroy(Class_ $class_)
    {
        $class_->delete();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Aula eliminada com sucesso');
    }

    public function calendario()
{
    $classes = Class_::all(); 
    $userSubscriptions = Auth::user()->subscriptions;

    return view('CalendarioDeAulas', compact('classes', 'userSubscriptions'));
}

}

