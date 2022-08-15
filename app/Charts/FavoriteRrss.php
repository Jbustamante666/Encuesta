<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class FavoriteRrss
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Red social mas querida.')
            // ->setSubtitle('Season 2021.')
            ->addData([
                \App\Models\SocialNetwork::find(1)->most_beloved()->count(),
                \App\Models\SocialNetwork::find(2)->most_beloved()->count(),
                \App\Models\SocialNetwork::find(3)->most_beloved()->count(),
                \App\Models\SocialNetwork::find(4)->most_beloved()->count(),
                \App\Models\SocialNetwork::find(5)->most_beloved()->count(),
            ])
            ->setLabels(\App\Models\SocialNetwork::all()->pluck('name')->toArray());
    }
}
