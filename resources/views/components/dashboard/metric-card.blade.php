@props([
    'label',
    'value',
    'change',
    'period' => 'vs. mes anterior',
    'icon',
    'tone' => 'emerald',
])

@php
    $tones = [
        'emerald' => ['icon' => 'bg-emerald-50 text-emerald-700', 'change' => 'text-emerald-700'],
        'rose' => ['icon' => 'bg-rose-50 text-rose-600', 'change' => 'text-rose-600'],
        'blue' => ['icon' => 'bg-blue-50 text-blue-700', 'change' => 'text-emerald-700'],
        'amber' => ['icon' => 'bg-amber-50 text-amber-700', 'change' => 'text-emerald-700'],
    ];
    $style = $tones[$tone] ?? $tones['emerald'];
@endphp

<article class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm sm:p-5">
    <div class="flex items-start justify-between gap-3">
        <div>
            <p class="text-sm font-medium text-slate-500">{{ $label }}</p>
            <p class="mt-3 text-2xl font-semibold tracking-tight text-slate-900">{{ $value }}</p>
        </div>
        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg {{ $style['icon'] }}" aria-hidden="true">
            {{ $icon }}
        </span>
    </div>
    <p class="mt-4 text-xs">
        <span class="font-semibold {{ $style['change'] }}">{{ $change }}</span>
        <span class="ml-1 text-slate-400">{{ $period }}</span>
    </p>
</article>
