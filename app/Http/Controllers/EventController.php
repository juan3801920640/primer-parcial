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
    public function index(Request $request)
    {
        //return view("events.index",["events"=> Event::all()]);
        $query = Event::query();
        
        if ($request->filled('search') && $request->filled('column')){
            $search = $request->input('search');
            $column = $request->input('column');

            if (in_array($column, ['name', 'location', 'description'])) {
                $query->where($column, 'LIKE', "%{$search}%");
            }
        }

        return view("events.index", ["events"=> $query->get()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("events.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = new Event($request->all());
        $event->save();
        return redirect()->route("events.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view("events.edit", ["event"=>$event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->all());
        return redirect()->route("events.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }
}
