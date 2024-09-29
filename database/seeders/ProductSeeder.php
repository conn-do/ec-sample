<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->createMany([
            [
                'name' => 'りんご',
                'price' => 100,
            ],
            [
                'name' => 'ばなな',
                'price' => 200,
            ],
            [
                'name' => 'いちご',
                'price' => 300,
            ],
        ]);
    }
}
