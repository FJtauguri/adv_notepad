<x-app-layout>
    <x-slot name="headersss">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 lg:px-8 w-full flex justify-center">
        
            <livewire:components.card-notes wire:poll/>
        
    </div>
</x-app-layout>
