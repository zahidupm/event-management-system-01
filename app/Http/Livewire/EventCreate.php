<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventCreate extends Component
{
    public $title;
    public $event_date;
    public $event_time;
    public $location;

    public function render()
    {
        return view('livewire.event-create');
    }

    public function formSubmit(){
        $this->validate([
            'title' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'location' => 'required',
        ]);

        $event = new Event();
        $event->title = $this->title;
        $event->event_date = $this->event_date;
        $event->event_time = $this->event_time;
        $event->location = $this->location;
        $event->user_id = auth()->user()->id;
        $event->save();

        flash()->addInfo('Event created successfully.');

        return redirect()->route('event.index');
    }
}
