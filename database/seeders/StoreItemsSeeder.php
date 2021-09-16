<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StoreItem;

class StoreItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10 ; $i++) {
            StoreItem::create([
                'title' => sprintf("商品%02d", $i),
                'price' => $i * 10,
                'stock' => 10
            ]);
        }
    }
}
