<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Topic;

class TopicController extends Controller
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
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic();

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/', $file_name);

        $topic->image = 'storage/' . $file_name;
        $topic->title = $request->input('title');
        $topic->subtitle = $request->input('subtitle');
        $topic->date = $request->input('date');

        $topic->save();

        return redirect(route('top'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::find($id);

        return view('topics.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::find($id);

        return view('topics.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopicRequest  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicRequest $request, $id)
    {
        $topic = Topic::find($id);

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/', $file_name);

        $topic->image = 'storage/' . $file_name;
        $topic->title = $request->input('title');
        $topic->subtitle = $request->input('subtitle');
        $topic->date = $request->input('date');

        $topic->save();

        return redirect(route('top'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);
        $topic->delete();

        return redirect()->route('top');
    }
}
