<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Event') }}
            </h2>

<a href="{{ route('event.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path d="M5.293 7.293L6.707 5.88 13.828 13 6.707 20.12 5.293 18.707 11.586 12 5.293 5.707z"/>
                </svg>
    <span>Back</span> </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:event-edit :event_id="$event_id" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
