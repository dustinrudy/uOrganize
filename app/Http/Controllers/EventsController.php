<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller
{
    public function index() {

        // auth()->id() // returns id of user

        // auth()->user() // returns User Class

       // auth()->check() // returns boolean indicating whether a guest or signed in.

        $events = Event::where('owner_id', auth()->id())->get();


        return view('events.index', ['events' => $events]);

    }

    public function create() {

        return view('events.create');

    }

    public function store() {

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        $attributes['owner_id'] = auth()->id();

        Event::create($attributes);



        return redirect('/events');
    }

    public function show(Event $event) {

        $this->authorize('view', $event);

        return view('events.show', compact('event'));
    }

    public function edit(Event $event) {

        return view('events.edit', compact('event'));

    }

    public function update(Event $event) {

        $event->update(request(['title', 'description']));

        return redirect('/events');


    }

    public function destroy(Event $event) {

        $event->delete();
        return redirect('/events');


    }
}
