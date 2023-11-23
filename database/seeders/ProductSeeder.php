<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductInventory;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->count(10)
            ->has(
                ProductInventory::factory()->count(1),
                'inventory'
            )
            ->create();
    }
}