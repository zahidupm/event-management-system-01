<form wire:submit.prevent="formSubmit">
    <div class="mb-4">
        <label for="title" class="event-label">Title</label>
        <input wire:model.lazy="title" id="title" type="text" class="event-input">

        @error('title')
        <div class="text-red-500 text-xs mt-4">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="event_date" class="event-label">Event Date</label>
        <input wire:model.lazy="event_date" id="event_date" type="date" class="event-input">

        @error('event_date')
        <div class="text-red-500 text-xs mt-4">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="event_time" class="event-label">Event Time</label>
        <input wire:model.lazy="event_time" id="event_time" type="time" class="event-input">

        @error('event_time')
        <div class="text-red-500 text-xs mt-4">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="location" class="event-label">Location</label>
        <input wire:model.lazy="location" id="location" type="text" class="event-input">

        @error('location')
        <div class="text-red-500 text-xs mt-4">{{$message}}</div>
        @enderror
    </div>
    @include('components.wire-loading-btn')
</form>
