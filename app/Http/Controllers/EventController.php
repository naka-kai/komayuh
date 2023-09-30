<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $event = new Event();

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/', $file_name);

        $event->image = 'storage/' . $file_name;
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->place = $request->input('place');
        $event->other = $request->input('other');

        $event->save();

        return redirect(route('top'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, $id)
    {
        $event = Event::find($id);

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/', $file_name);

        $event->image = 'storage/' . $file_name;
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->place = $request->input('place');
        $event->other = $request->input('other');

        $event->save();

        return redirect(route('top'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('top');
    }
}
