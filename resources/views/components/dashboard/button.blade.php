@props([
    'variant' => 'secondary',
    'type' => 'button',
])

@php
    $styles = [
        'primary' => 'border border-emerald-700 bg-emerald-700 text-white hover:bg-emerald-800',
        'secondary' => 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50',
        'quiet' => 'border border-transparent bg-transparent text-slate-500 hover:bg-slate-100 hover:text-slate-800',
    ];
@endphp

<button type="{{ $type }}" {{ $attributes->class([
    'inline-flex items-center justify-center gap-2 rounded-lg px-3.5 py-2 text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2',
    $styles[$variant] ?? $styles['secondary'],
]) }}>
    {{ $slot }}
</button>
