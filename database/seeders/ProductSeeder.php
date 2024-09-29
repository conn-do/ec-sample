<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

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
