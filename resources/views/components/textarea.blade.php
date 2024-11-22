@props(['name' => null, 'placeholder' => 'Write your notes...', 'variant' => 'primary'])

@php

    $variant = is_string($variant) ? $variant : 'primary';

    $variants = [
        'primary' => 'w-full p-2 border border-gray-600 rounded-lg bg-gray-900 text-gray-100 resize-none focus:ring-0 focus:ring-gray-100 focus:outline-none overflow-hidden',
        'secondary' => 'w-full p-2 border border-gray-600 rounded-lg bg-gray-900 text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none overflow-hidden',
    ];

    $textareaClass = $variants[$variant] ?? $variants['primary']

@endphp

<textarea 
{{ $attributes->merge(['class' => $textareaClass]) }} oninput="autoResize(this)"
placeholder="{{ $placeholder }}"></textarea>