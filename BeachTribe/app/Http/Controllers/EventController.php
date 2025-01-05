<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('_admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = new Event;
        return view('_admin.events.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $fields = $request->validated();

        $events = new Event;
        $events->fill($fields);
        $events->save();

        return redirect()->route('admin.events.index')
            ->with('success', 'Evento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $events)
    {
        return view('_admin.events.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('_admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $fields = $request->validated();

        $event->fill($fields);
        $event->save();

        return redirect()->route('admin.events.index')
            ->with('success', 'Evento alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Evento eliminado com sucesso');
    }
}
