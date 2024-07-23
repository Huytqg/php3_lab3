<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 1; $i++){
            DB::table('pets')->insert([
                'title' => Fake() -> text(25),
                'thumbnail' => Fake() -> imageUrl(),
                'author' => Fake() -> name() . ' ' . Fake()->lastName(),
                'publisher' => Fake() -> text(255),
                'publication' => Fake() -> date(),
                'price' => rand(10, 100),
                'quantity' => rand(10, 1000),
                'category_id' => rand(1, 3)
            ]);
        }
    }

}
