<?php

namespace App\Http\Livewire\Statistics;

use App\Charts\AgeRange as ChartsAgeRange;
use Livewire\Component;

class AgeRange extends Component
{
    protected $chart;
    
    public function mount(ChartsAgeRange $chart)
    {
        $this->chart = $chart->build();
    }

    public function render()
    {
        return view('livewire.statistics.age-range', ['chart' => $this->chart]);
    }
}
