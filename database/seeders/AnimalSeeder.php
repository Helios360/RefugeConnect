<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::insert([
            [
                "name"=>"Bella",
                "breed"=>"Chien",
                "age"=>5,
                "description"=>"Une labrador joueuse et affectueuse qui adore la compagnie.",
                "img"=>"bella.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name"=>"Luna",
                "breed"=>"Chat",
                "age"=>3,
                "description"=>"Une chatte calme et câline qui aime les endroits tranquilles.",
                "img"=>"luna.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name"=>"Max",
                "breed"=>"Chien",
                "age"=>2,
                "description"=>"Un jeune chiot plein d’énergie qui adore courir et jouer dehors.",
                "img"=>"max.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
