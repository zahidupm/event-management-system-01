<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventIndex extends Component
{
    public function render()
    {
        $events = Event::latest()->paginate(5);
        return view('livewire.event-index', ['events' => $events]);
    }
}
