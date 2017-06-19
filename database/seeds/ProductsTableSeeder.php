<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['product_name' => 'product1', 'product_picture' => 'picture1', 'product_description' => 'good'],
            ['product_name' => 'product2', 'product_picture' => 'picture2', 'product_description' => 'good'],
            ['product_name' => 'product3', 'product_picture' => 'picture3', 'product_description' => 'good'],
        ]);
    }
}
