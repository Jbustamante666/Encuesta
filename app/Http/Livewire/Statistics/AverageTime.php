<?php

namespace App\Http\Livewire\Statistics;

use App\Charts\AvaregeTime;
use Livewire\Component;

class AverageTime extends Component
{
    protected $chart;
    
    public function mount(AvaregeTime $chart)
    {
        $this->chart = $chart->build();
    }

    public function render()
    {
        return view('livewire.statistics.average-time', ['chart' => $this->chart]);
    }
}
