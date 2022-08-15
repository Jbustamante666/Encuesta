<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialNetwork::create([
            'name' => 'Facebook'
        ]);

        SocialNetwork::create([
            'name' => 'WhatsApp'
        ]);

        SocialNetwork::create([
            'name' => 'Twitter'
        ]);

        SocialNetwork::create([
            'name' => 'Instagram'
        ]);

        SocialNetwork::create([
            'name' => 'Tiktok'
        ]);
    }
}
