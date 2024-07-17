<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++){
            DB::table('books')->insert([
                'title' => Fake() -> text(25),
                'thumbnail' => Fake() -> imageUrl(),
                'author' => Fake() -> name() . ' ' . Fake()->lastName(),
                'publisher' => Fake() -> text(25),
                'publication' => Fake() -> date(),
                'price' => rand(10, 100),
                'quantity' => rand(10, 1000),
                'category_id' => rand(1, 3)
            ]);
        }
    }
}
