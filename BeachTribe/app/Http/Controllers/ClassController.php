<?php

namespace App\Http\Controllers;

use App\Models\Class_;
use App\Http\Requests\ClassRequest;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Class_::all();
        return view('_admin.classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class_ = new Class_;
        return view('_admin.classes.create', compact('class_'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassRequest $request)
    {
        
        $fields = $request->validated();

        
        $class_ = new Class_;
        $class_->fill($fields);
        $class_->save();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Aula criada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Class_ $class_)
    {
        return view('_admin.classes.show', compact('class_'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Class_ $class_)
    {
        return view('_admin.classes.edit', compact('class_'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassRequest $request, Class_ $class_)
    {
        
        $fields = $request->validated();

        
        $class_->fill($fields);
        $class_->save();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Aula alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Class_ $class_)
    {
        $class_->delete();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Aula eliminada com sucesso');
    }

    /**
     * Display a listing of the resource for calendar view.
     */
    public function calendario()
    {
        $classes = Class_::where('state', 'A')->orderBy('date', 'asc')->get();

        return view('CalendarioDeAulas', compact('classes'));
    }
}
