@props(['name' => null, 'variant' => 'primary'])


@php

    $variant = is_string($variant) ? $variant : 'primary';

    $variants = [
        'primary' => 'inline-flex items-center px-2 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150',
        'danger' => 'inline-flex items-center px-2 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150',
        'warning' => 'inline-flex items-center px-2 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150',
        'transparent' => 'inline-flex items-center px-2 py-2 bg-transparent border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150',
    ];

    $buttonClasas = $variants[$variant] ?? $variants['primary'];

    

@endphp

<button {{ $attributes->merge(['class' => $buttonClasas, 'type' => 'submit']) }} name="{{ $name }}">
    @if ($slotView)
        @include($slotView)
    @endif
    @if (!empty($slotView))    
        @if ($slotContent)
            {{ $slotContent }}
        @endif
    @endif
</button>