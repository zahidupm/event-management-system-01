<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventEdit extends Component
{
    public $event_id;
    public $title;
    public $event_date;
    public $event_time;
    public $location;

    public function mount(){
        $event = Event::findOrFail($this->event_id);
        $this->title = $event->title;
        $this->event_date = $event->event_date;
        $this->event_time = $event->event_time;
        $this->location = $event->location;
    }
    public function render()
    {
        return view('livewire.event-edit');
    }

    public function formSubmit(){
        $validatedData = $this->validate([
            'title' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'location' => 'required',
        ]);

        $event = Event::findOrFail($this->event_id);
        $event->title = $this->title;
        $event->event_date = $this->event_date;
        $event->event_time = $this->event_time;
        $event->location = $this->location;
        $event->user_id = auth()->user()->id;
        $event->save();

        flash()->addInfo('Event updated successfully!');

        return redirect()->route('event.index');
    }
}
