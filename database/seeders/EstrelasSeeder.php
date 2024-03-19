<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estrelas;

class EstrelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estrelas::factory()->count(5)->sequence([
            'estrelas' => "1 estrela",
            'estrelas' => "2 estrelas",
            'estrelas' => "3 estrelas",
            'estrelas' => "4 estrelas",
            'estrelas' => "5 estrelas",
        ])->create();
    }
}
