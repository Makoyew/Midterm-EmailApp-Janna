<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foods;

class FoodsSeeder extends Seeder
{
    public function run()
    {
        // Create 10 records of foods
        Foods::factory()->count(10)->create();
    }
}
