<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class AvaregeTime
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Horas promedio al día')
            // ->setSubtitle('Season 2021.')
            ->addData([
                round(\App\Models\Survey::all()->avg('t_facebook')),
                round(\App\Models\Survey::all()->avg('t_whatsapp')),
                round(\App\Models\Survey::all()->avg('t_twitter')),
                round(\App\Models\Survey::all()->avg('t_instagram')),
                round(\App\Models\Survey::all()->avg('t_tiktok')),
            ])
            ->setLabels(\App\Models\SocialNetwork::all()->pluck('name')->toArray());
    }
}
