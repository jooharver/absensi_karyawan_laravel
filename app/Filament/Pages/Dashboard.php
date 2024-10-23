<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Resources\DashboardResource\Widgets\GoogleSalesChart; 
class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            GoogleSalesChart::class,
        ];
    }
}
