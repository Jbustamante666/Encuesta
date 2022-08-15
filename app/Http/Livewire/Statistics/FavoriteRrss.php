<?php

namespace App\Http\Livewire\Statistics;

use App\Charts\FavoriteRrss as ChartsFavoriteRrss;
use Livewire\Component;

class FavoriteRrss extends Component
{
    protected $chart;

    public function mount(ChartsFavoriteRrss $chart)
    {
        $this->chart = $chart->build();
    }

    public function render()
    {
        return view('livewire.statistics.favorite-rrss', ['chart' => $this->chart]);
    }
}
