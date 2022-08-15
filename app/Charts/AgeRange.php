<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class AgeRange
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\barChart
    {
        return $this->chart->barChart()
            ->setTitle('Rango de edad por personas que más horas usan una red social al día')
            // ->setSubtitle('Wins during season 2021.')
            ->addData('Facebook', [
                round(\App\Models\Survey::where('age', '18-25')
                    ->avg('t_facebook')),
                round(\App\Models\Survey::where('age', '26-33')
                    ->avg('t_facebook')),
                round(\App\Models\Survey::where('age', '34-40')
                    ->avg('t_facebook')),
                round(\App\Models\Survey::where('age', '40+')
                    ->avg('t_facebook')),
            ])
            ->addData('WhatsApp', [
                round(\App\Models\Survey::where('age', '18-25')
                    ->avg('t_whatsapp')),
                round(\App\Models\Survey::where('age', '26-33')
                    ->avg('t_whatsapp')),
                round(\App\Models\Survey::where('age', '34-40')
                    ->avg('t_whatsapp')),
                round(\App\Models\Survey::where('age', '40+')
                    ->avg('t_whatsapp')),
            ])
            ->addData('Twitter', [
                round(\App\Models\Survey::where('age', '18-25')
                    ->avg('t_twitter')),
                round(\App\Models\Survey::where('age', '26-33')
                    ->avg('t_twitter')),
                round(\App\Models\Survey::where('age', '34-40')
                    ->avg('t_twitter')),
                round(\App\Models\Survey::where('age', '40+')
                    ->avg('t_twitter')),
            ])
            ->addData('Instagram', [
                round(\App\Models\Survey::where('age', '18-25')
                    ->avg('t_instagram')),
                round(\App\Models\Survey::where('age', '26-33')
                    ->avg('t_instagram')),
                round(\App\Models\Survey::where('age', '34-40')
                    ->avg('t_instagram')),
                round(\App\Models\Survey::where('age', '40+')
                    ->avg('t_instagram'))
            ])
            ->addData('Tiktok', [
                round(\App\Models\Survey::where('age', '18-25')
                    ->avg('t_tiktok')),
                round(\App\Models\Survey::where('age', '26-33')
                    ->avg('t_tiktok')),
                round(\App\Models\Survey::where('age', '34-40')
                    ->avg('t_tiktok')),
                round(\App\Models\Survey::where('age', '40+')
                    ->avg('t_tiktok'),)
            ])
            ->setXAxis(['18-25', '26-33', '34-40', '40+']);
    }
}
