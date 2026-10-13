@extends('layouts.app')

@section('title', 'Dashboard Financiero y Operativo')

@section('content')
<div class="min-h-screen lg:flex">
    <aside class="flex w-full flex-col border-b border-slate-200 bg-white lg:fixed lg:inset-y-0 lg:w-60 lg:border-b-0 lg:border-r">
        <a href="{{ route('dashboard') }}" class="flex h-16 items-center gap-3 border-b border-slate-100 px-5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-700 text-sm font-bold text-white">F</span>
            <span>
                <span class="block text-sm font-bold tracking-tight text-slate-900">FiscalSync</span>
                <span class="block text-[11px] text-slate-400">Gestión inteligente</span>
            </span>
        </a>

        <div class="hidden flex-1 overflow-y-auto px-3 py-5 lg:block">
            <p class="px-3 text-[10px] font-bold uppercase tracking-[0.16em] text-slate-400">Espacio de trabajo</p>
            <nav class="mt-3 space-y-1" aria-label="Navegación principal">
                <a href="{{ route('dashboard') }}" aria-current="page" class="flex items-center gap-3 rounded-lg bg-emerald-50 px-3 py-2.5 text-sm font-semibold text-emerald-800">
                    <span aria-hidden="true">▦</span> Dashboard
                </a>
                <a href="#movimientos" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">↕</span> Finanzas y movimientos</a>
                <a href="#conciliacion" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">▤</span> CFDI y conciliación</a>
                <a href="#cobranza" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">♧</span> Clientes y cobranza</a>
                <a href="#vencimientos" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">▣</span> Calendario fiscal</a>
                <a href="#reportes" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">▥</span> Reportes e impuestos</a>
            </nav>

            <p class="mt-8 px-3 text-[10px] font-bold uppercase tracking-[0.16em] text-slate-400">Administración</p>
            <nav class="mt-3 space-y-1" aria-label="Administración">
                <a href="#equipo" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">♙</span> Equipo y permisos</a>
                <a href="#configuracion" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-800"><span aria-hidden="true">⚙</span> Configuración</a>
            </nav>
        </div>

        <div class="hidden border-t border-slate-100 p-4 lg:block">
            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-800">AC</span>
                <div class="min-w-0">
                    <p class="truncate text-xs font-semibold text-slate-800">Administración</p>
                    <p class="truncate text-[11px] text-slate-400">Plan empresarial</p>
                </div>
                <span class="ml-auto text-slate-400" aria-hidden="true">···</span>
            </div>
        </div>
    </aside>

    <main class="min-w-0 flex-1 lg:ml-60">
        <header class="flex h-16 items-center justify-between border-b border-slate-200 bg-white px-5 sm:px-8">
            <div class="flex items-center gap-2 text-xs text-slate-400">
                <span class="hidden sm:inline">FiscalSync</span><span class="hidden sm:inline">/</span>
                <span class="font-medium text-slate-600">Resumen general</span>
            </div>
            <div class="flex items-center gap-3 sm:gap-5">
                <span class="hidden text-xs text-slate-500 sm:inline">Miércoles, 12 de junio de 2024</span>
                <button type="button" aria-label="Notificaciones" class="relative flex h-9 w-9 items-center justify-center rounded-lg text-slate-500 hover:bg-slate-100">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"/></svg>
                    <span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-rose-500 ring-2 ring-white"></span>
                </button>
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-100 text-[11px] font-bold text-emerald-800">AC</span>
            </div>
        </header>

        <div class="mx-auto max-w-[1600px] space-y-6 p-5 sm:p-8">
            <section class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-emerald-700">Mi empresa <span class="px-1 text-slate-300">/</span> RFC: EMP•••••••</p>
                    <h1 class="mt-2 text-2xl font-semibold tracking-tight text-slate-900 sm:text-3xl">Dashboard Financiero y Operativo</h1>
                    <p class="mt-2 text-sm text-slate-500">Este es el resumen de la salud financiera de tu negocio.</p>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <x-dashboard.button>
                        <svg viewBox="0 0 20 20" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 2.75v2.5m8-2.5v2.5M3.5 7h13M4.5 4.5h11a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1Z"/></svg>
                        Últimos 30 días
                    </x-dashboard.button>
                    <x-dashboard.button variant="primary">
                        <svg viewBox="0 0 20 20" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M10 3v14M3 10h14"/></svg>
                        Nueva operación
                    </x-dashboard.button>
                </div>
            </section>

            <section aria-label="Indicadores financieros" class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
                <x-dashboard.metric-card label="Ingresos del periodo" value="$288,630" change="+12.8%" icon="$" tone="emerald" />
                <x-dashboard.metric-card label="Gastos del periodo" value="$142,950" change="+4.2%" icon="↗" tone="rose" />
                <x-dashboard.metric-card label="Utilidad neta" value="$94,320" change="+18.6%" icon="◈" tone="blue" />
                <x-dashboard.metric-card label="Por cobrar" value="$68,500" change="12 facturas" period="pendientes" icon="◷" tone="amber" />
                <article class="rounded-xl bg-slate-900 p-4 text-white shadow-sm sm:p-5">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-300">Saldo en bancos</p>
                            <p class="mt-3 text-2xl font-semibold tracking-tight">$18,450</p>
                        </div>
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/10 text-emerald-300" aria-hidden="true">$</span>
                    </div>
                    <p class="mt-4 text-xs text-slate-400"><span class="font-semibold text-emerald-300">Disponible</span><span class="ml-1">en 3 cuentas</span></p>
                </article>
            </section>

            <section class="grid grid-cols-1 gap-5 xl:grid-cols-3">
                <article class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm xl:col-span-2">
                    <div class="flex flex-wrap items-start justify-between gap-4">
                        <div>
                            <h2 class="text-base font-semibold text-slate-900">Flujo de efectivo</h2>
                            <p class="mt-1 text-xs text-slate-500">Ingresos y gastos durante los últimos 6 meses</p>
                        </div>
                        <div class="flex items-center gap-4 text-xs text-slate-500">
                            <span class="flex items-center gap-1.5"><i class="h-2.5 w-2.5 rounded-sm bg-emerald-700"></i>Ingresos</span>
                            <span class="flex items-center gap-1.5"><i class="h-2.5 w-2.5 rounded-sm bg-emerald-200"></i>Gastos</span>
                        </div>
                    </div>
                    <div class="mt-6 overflow-hidden">
                        <div class="flex h-52 items-end justify-around gap-3 border-b border-slate-100 px-2 sm:gap-8">
                            @foreach ([['Ene', 54, 32], ['Feb', 68, 40], ['Mar', 48, 35], ['Abr', 78, 44], ['May', 62, 38], ['Jun', 88, 50]] as [$month, $income, $expense])
                                <div class="flex h-full flex-1 flex-col justify-end">
                                    <div class="flex h-[88%] items-end justify-center gap-1.5 border-b border-dashed border-slate-100">
                                        <span class="w-4 rounded-t bg-emerald-700 sm:w-7" style="height: {{ $income }}%"></span>
                                        <span class="w-4 rounded-t bg-emerald-200 sm:w-7" style="height: {{ $expense }}%"></span>
                                    </div>
                                    <span class="py-2.5 text-center text-[11px] text-slate-400">{{ $month }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4 flex items-center justify-between rounded-lg bg-slate-50 px-4 py-3">
                            <div>
                                <p class="text-xs text-slate-500">Flujo neto este mes</p>
                                <p class="mt-0.5 text-sm font-semibold text-slate-800">$45,680.00 <span class="ml-1 text-xs font-medium text-emerald-700">↑ 8.4%</span></p>
                            </div>
                            <span class="text-xs text-slate-400">Junio 2024</span>
                        </div>
                    </div>
                </article>

                <article id="cobranza" class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div>
                            <h2 class="text-base font-semibold text-slate-900">Salud financiera</h2>
                            <p class="mt-1 text-xs text-slate-500">Resumen de tu operación</p>
                        </div>
                        <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-semibold text-emerald-700">Estable</span>
                    </div>
                    <div class="mt-5 space-y-4">
                        <div>
                            <div class="mb-1.5 flex justify-between text-xs"><span class="text-slate-500">Liquidez</span><span class="font-semibold text-slate-700">82%</span></div>
                            <div class="h-2 overflow-hidden rounded-full bg-slate-100"><div class="h-full w-[82%] rounded-full bg-emerald-600"></div></div>
                        </div>
                        <div>
                            <div class="mb-1.5 flex justify-between text-xs"><span class="text-slate-500">Facturas conciliadas</span><span class="font-semibold text-slate-700">74%</span></div>
                            <div class="h-2 overflow-hidden rounded-full bg-slate-100"><div class="h-full w-[74%] rounded-full bg-teal-500"></div></div>
                        </div>
                    </div>
                    <div class="mt-5 border-t border-slate-100 pt-4">
                        <h3 class="text-xs font-semibold text-slate-700">Cuentas por cobrar</h3>
                        <div class="mt-3 space-y-3">
                            <div class="flex items-center justify-between gap-3 text-xs"><span class="truncate text-slate-500">Servicios profesionales</span><span class="shrink-0 font-semibold text-slate-700">$24,800</span></div>
                            <div class="flex items-center justify-between gap-3 text-xs"><span class="truncate text-slate-500">Comercial del Centro</span><span class="shrink-0 font-semibold text-slate-700">$18,200</span></div>
                            <div class="flex items-center justify-between gap-3 text-xs"><span class="truncate text-slate-500">Otros clientes</span><span class="shrink-0 font-semibold text-slate-700">$25,500</span></div>
                        </div>
                        <a href="#movimientos" class="mt-4 inline-flex text-xs font-semibold text-emerald-700 hover:text-emerald-800">Ver cuentas por cobrar <span class="ml-1" aria-hidden="true">→</span></a>
                    </div>
                </article>
            </section>

            <section class="grid grid-cols-1 gap-5 xl:grid-cols-3">
                <article id="movimientos" class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm xl:col-span-2">
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <h2 class="text-base font-semibold text-slate-900">Últimos movimientos</h2>
                            <p class="mt-1 text-xs text-slate-500">Actividad reciente de tus cuentas</p>
                        </div>
                        <x-dashboard.button variant="quiet">Ver todos <span aria-hidden="true">→</span></x-dashboard.button>
                    </div>
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full min-w-[600px] text-left text-xs">
                            <thead>
                                <tr class="border-b border-slate-100 text-[10px] font-semibold uppercase tracking-wider text-slate-400">
                                    <th class="pb-3 pr-4">Movimiento</th>
                                    <th class="px-4 pb-3">Fecha</th>
                                    <th class="px-4 pb-3">Estado</th>
                                    <th class="pb-3 pl-4 text-right">Importe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ([
                                    ['initials' => 'NC', 'name' => 'Nómina quincenal', 'description' => 'Transferencia · BBVA', 'date' => '12 jun, 2024', 'status' => 'Conciliado', 'amount' => '-$32,500.00'],
                                    ['initials' => 'TC', 'name' => 'Tecnología Creativa S.A.', 'description' => 'Factura F-1042 · SPEI recibido', 'date' => '11 jun, 2024', 'status' => 'Conciliado', 'amount' => '+$48,200.00'],
                                    ['initials' => 'SE', 'name' => 'Servicios de energía', 'description' => 'Pago de servicio · CFE', 'date' => '10 jun, 2024', 'status' => 'Pendiente', 'amount' => '-$8,640.00'],
                                    ['initials' => 'PR', 'name' => 'Pago proveedor materiales', 'description' => 'Transferencia · Santander', 'date' => '09 jun, 2024', 'status' => 'Revisar', 'amount' => '-$12,300.00'],
                                ] as $transaction)
                                    <x-dashboard.transaction-row :transaction="$transaction" />
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </article>

                <div class="space-y-5">
                    <article id="vencimientos" class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-semibold text-slate-900">Calendario de vencimientos</h2>
                                <p class="mt-1 text-xs text-slate-500">Próximas fechas importantes</p>
                            </div>
                            <button type="button" aria-label="Ver calendario" class="text-slate-400 hover:text-slate-700">···</button>
                        </div>
                        <div class="mt-4 space-y-3">
                            <div class="flex items-center gap-3 rounded-lg border border-slate-100 p-3">
                                <span class="w-10 shrink-0 text-center"><span class="block text-[10px] font-semibold uppercase text-rose-500">Jun</span><span class="block text-lg font-semibold text-slate-800">17</span></span>
                                <div class="min-w-0 border-l border-slate-100 pl-3"><p class="truncate text-xs font-semibold text-slate-700">Declaración provisional ISR</p><p class="mt-1 text-[11px] text-slate-400">SAT · En 5 días</p></div>
                                <span class="ml-auto h-2 w-2 shrink-0 rounded-full bg-rose-400"></span>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg border border-slate-100 p-3">
                                <span class="w-10 shrink-0 text-center"><span class="block text-[10px] font-semibold uppercase text-amber-600">Jun</span><span class="block text-lg font-semibold text-slate-800">20</span></span>
                                <div class="min-w-0 border-l border-slate-100 pl-3"><p class="truncate text-xs font-semibold text-slate-700">Pago de IVA mensual</p><p class="mt-1 text-[11px] text-slate-400">SAT · En 8 días</p></div>
                                <span class="ml-auto h-2 w-2 shrink-0 rounded-full bg-amber-400"></span>
                            </div>
                        </div>
                        <a href="#reportes" class="mt-4 inline-flex text-xs font-semibold text-emerald-700 hover:text-emerald-800">Ver calendario completo <span class="ml-1" aria-hidden="true">→</span></a>
                    </article>

                    <article id="reportes" class="overflow-hidden rounded-xl bg-slate-900 p-5 text-white shadow-sm">
                        <div class="flex items-center gap-2">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-400/15 text-emerald-300" aria-hidden="true">✳</span>
                            <div><p class="text-sm font-semibold">Copiloto fiscal IA</p><p class="text-[11px] text-slate-400">Análisis inteligente</p></div>
                            <span class="ml-auto rounded-full bg-emerald-400/15 px-2 py-1 text-[10px] font-semibold text-emerald-300">2 alertas</span>
                        </div>
                        <p class="mt-4 text-xs leading-5 text-slate-300">Detecté 3 facturas pendientes de conciliación y una fecha fiscal próxima. ¿Quieres revisar las recomendaciones?</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <x-dashboard.button variant="primary" class="!border-emerald-500 !bg-emerald-600 hover:!bg-emerald-500">Ver recomendaciones <span aria-hidden="true">→</span></x-dashboard.button>
                            <x-dashboard.button variant="quiet" class="!text-slate-300 hover:!bg-white/10 hover:!text-white">Más tarde</x-dashboard.button>
                        </div>
                    </article>
                </div>
            </section>

            <footer class="pb-2 text-center text-[11px] text-slate-400">FiscalSync · Información financiera actualizada al 12 de junio de 2024</footer>
        </div>
    </main>
</div>
@endsection
