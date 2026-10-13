<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_dashboard_route_displays_the_financial_overview(): void
    {
        $this->get('/dashboard')
            ->assertOk()
            ->assertSee('Dashboard Financiero y Operativo')
            ->assertSee('Flujo de efectivo')
            ->assertSee('Últimos movimientos')
            ->assertSee('Calendario de vencimientos')
            ->assertSee('Copiloto fiscal IA');
    }
}
