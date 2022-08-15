<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalSurveys
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Cantidad de encuestas respondidas')
            // ->setSubtitle('Season 2021.')
            ->addData([\App\Models\Survey::all()->count()])
            ->setLabels(['encuestas']);
    }
}
