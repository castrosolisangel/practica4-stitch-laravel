@props(['transaction'])

<tr class="border-b border-slate-100 last:border-0">
    <td class="whitespace-nowrap py-3.5 pr-4">
        <div class="flex items-center gap-3">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-slate-100 text-xs font-semibold text-slate-600">
                {{ $transaction['initials'] }}
            </span>
            <div>
                <p class="font-medium text-slate-800">{{ $transaction['name'] }}</p>
                <p class="mt-0.5 text-xs text-slate-400">{{ $transaction['description'] }}</p>
            </div>
        </div>
    </td>
    <td class="whitespace-nowrap px-4 py-3.5 text-sm text-slate-500">{{ $transaction['date'] }}</td>
    <td class="whitespace-nowrap px-4 py-3.5">
        <span @class([
            'inline-flex rounded-full px-2.5 py-1 text-xs font-semibold',
            'bg-emerald-50 text-emerald-700' => $transaction['status'] === 'Conciliado',
            'bg-amber-50 text-amber-700' => $transaction['status'] === 'Pendiente',
            'bg-rose-50 text-rose-700' => $transaction['status'] === 'Revisar',
        ])>
            {{ $transaction['status'] }}
        </span>
    </td>
    <td @class([
        'whitespace-nowrap py-3.5 pl-4 text-right font-semibold',
        'text-rose-600' => str_starts_with($transaction['amount'], '-'),
        'text-slate-800' => ! str_starts_with($transaction['amount'], '-'),
    ])>
        {{ $transaction['amount'] }}
    </td>
</tr>
