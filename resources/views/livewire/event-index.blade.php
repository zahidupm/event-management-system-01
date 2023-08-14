<div>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Title</th>
            <th class="border px-4 py-2 text-left">Date</th>
            <th class="border px-4 py-2 text-left">Time</th>
            <th class="border px-4 py-2">Location</th>
            <th class="border px-4 py-2">Action</th>
        </tr>
        @foreach($events as $event)
            <tr>
                <td class="border px-4 py-2">{{ $event->title }}</td>
                <td class="border px-4 py-2">{{ $event->event_date }}</td>
                <td class="border px-4 py-2">{{ $event->event_time }}</td>
                <td class="border px-4 py-2 text-center">{{ $event->location }}</td>
                <td class="border px-4 py-2 text-center">
                    <div class="flex items-center justify-center">
                        <a href="{{route('event.edit', $event->id)}}">
                            @include('components.icons.edit')
                        </a>
                        <a class="px-2" href="{{route('event.show', $event->id)}}">
                            @include('components.icons.eye')
                        </a>

                        <form onsubmit="return confirm('Are you sure?')" wire:submit.prevent="leadDelete({{ $event->id }})">
                            <button type="submit">
                                @include('components.icons.trash')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{ $events->links() }}
    </div>
</div>
