<?php

namespace App\Http\Livewire\Statistics;

use App\Charts\TotalSurveys;
use Livewire\Component;

class CompletedSurveys extends Component
{
    protected $chart;
    
    public function mount(TotalSurveys $chart)
    {
        $this->chart = $chart->build();
    }

    public function render()
    {
        return view('livewire.statistics.completed-surveys', ['chart' => $this->chart]);
    }
}
