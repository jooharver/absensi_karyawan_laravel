<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use Filament\Widgets\ChartWidget;

class GoogleSalesChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getChartData(): array
    {
        return [
            'chartType' => 'LineChart',
            'dataTable' => [
                ['Month', 'Sales'],
                ['January',  1000],
                ['February',  1170],
                ['March',  660],
                ['April',  1030],
            ],
            'options' => [
                'title' => 'Company Performance',
                'curveType' => 'function',
                'legend' => ['position' => 'bottom'],
            ],
        ];
    }
    protected function getType(): string
    {
        return 'pie';
    }
}
