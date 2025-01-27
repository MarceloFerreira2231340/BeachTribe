<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Http\Requests\SportRequest;
use App\Http\Requests\SportSearchRequest;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SportSearchRequest $request)
    {
        $query = Sport::query();

        if ($request->filled('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }

        $sports = $query->get();

        return view('_admin.sports.index', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sport = new Sport;
        return view('_admin.sports.create', compact('sport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SportRequest $request)
    {
        $fields = $request->validated();

        $sport = new Sport;
        $sport->fill($fields);
        $sport->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('sports', $imageName, 'public');
            $sport->image = $imageName;
            $sport->save();
        }

        return redirect()->route('admin.sports.index')
            ->with('success', 'Modalidade criada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport)
    {
        return view('_admin.sports.show', compact('sport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sport $sport)
    {
        return view('_admin.sports.edit', compact('sport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SportRequest $request, Sport $sport)
    {
        $fields = $request->validated();

        $sport->fill($fields);
        $sport->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('sports', $imageName, 'public');
            $sport->image = $imageName;
            $sport->save();
        }

        return redirect()->route('admin.sports.index')
            ->with('success', 'Modalidade alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport)
    {
        $sport->delete();

        return redirect()->route('admin.sports.index')
            ->with('success', 'Modalidades eliminada com sucesso');
    }
}
