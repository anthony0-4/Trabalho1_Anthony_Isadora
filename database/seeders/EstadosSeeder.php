<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estados;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Estados::insert([
            ['estados' => "Acre"],
            ['estados' => "Alagoas"],
            ['estados' => "Amapa"],
            ['estados' => "Amazonas"],
            ['estados' => "Bahia"],
            ['estados' => "Ceara"],
            ['estados' => "Espirito Santo"],
            ['estados' => "Goias"],
            ['estados' => "Maranhao"],
            ['estados' => "Mato Grosso"],
            ['estados' => "Mato Grosso do Sul"],
            ['estados' => "Minas Gerais"],
            ['estados' => "Para"],
            ['estados' => "Paraiba"],
            ['estados' => "Parana"],
            ['estados' => "Pernambuco"],
            ['estados' => "Piaui"],
            ['estados' => "Rio de Janeiro"],
            ['estados' => "Rio Grande do Norte"],
            ['estados' => "Rio Grande do Sul"],
            ['estados' => "Rondonia"],
            ['estados' => "Roraima"],
            ['estados' => "Santa Catarina"],
            ['estados' => "Sao Paulo"],
            ['estados' => "Sergipe"],
            ['estados' => "Tocantins"],
            ['estados' => "Distrito Federal"],

        ]);
      /*  Estados::factory()->count(27)->sequence([
            'estados' => "Acre",
            'estados' => "Alagoas",
            'estados' => "Amapa",
            'estados' => "Amazonas",
            'estados' => "Bahia",
            'estados' => "Ceara",
            'estados' => "Espirito Santo",
            'estados' => "Goias",
            'estados' => "Maranhao",
            'estados' => "Mato Grosso",
            'estados' => "Mato Grosso do Sul",
            'estados' => "Minas Gerais",
            'estados' => "Para",
            'estados' => "Paraiba",
            'estados' => "Parana",
            'estados' => "Pernambuco",
            'estados' => "Piaui",
            'estados' => "Rio de Janeiro",
            'estados' => "Rio Grande do Norte",
            'estados' => "Rio Grande do Sul",
            'estados' => "Rondonia",
            'estados' => "Roraima",
            'estados' => "Santa Catarina",
            'estados' => "Sao Paulo",
            'estados' => "Sergipe",
            'estados' => "Tocantins",
            'estados' => "Distrito Federal",
        ])->create();*/
    }
}
