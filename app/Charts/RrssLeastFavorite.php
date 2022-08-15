<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class RrssLeastFavorite
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Red social menos querida.')
            // ->setSubtitle('Season 2021.')
            ->addData([
                \App\Models\SocialNetwork::find(1)->least_favorite()->count(),
                \App\Models\SocialNetwork::find(2)->least_favorite()->count(),
                \App\Models\SocialNetwork::find(3)->least_favorite()->count(),
                \App\Models\SocialNetwork::find(4)->least_favorite()->count(),
                \App\Models\SocialNetwork::find(5)->least_favorite()->count(),
            ])
            ->setLabels(\App\Models\SocialNetwork::all()->pluck('name')->toArray());
    }
}
