<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventShow extends Component
{
    public $event_id;
    public function render()
    {
        $event = Event::find($this->event_id);
        return view('livewire.event-show', ['event' => $event]);
    }
}
