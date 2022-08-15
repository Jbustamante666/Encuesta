<?php

namespace App\Http\Livewire\Statistics;

use App\Charts\RrssLeastFavorite as ChartsRrssLeastFavorite;
use Livewire\Component;

class RrssLeastFavorite extends Component
{
    protected $chart;

    public function mount(ChartsRrssLeastFavorite $chart)
    {
        $this->chart = $chart->build();
    }

    public function render()
    {
        return view('livewire.statistics.rrss-least-favorite', ['chart' => $this->chart]);
    }
}
