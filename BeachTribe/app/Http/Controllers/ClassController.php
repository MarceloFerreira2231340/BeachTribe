<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassRequest;
use App\Models\Class_;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Class_::all();
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
        $classes = Class_::where('state', 'A')->orderBy('date', 'asc')->get();

        return view('CalendarioDeAulas', compact('classes'));
    }
}

