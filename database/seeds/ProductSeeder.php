<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Sản phẩm 001';
        $product->description = 'Hoa Lan';
        $product->price = 1.5;
        $product->save();

        $product = new \App\Product();
        $product->name = 'Sản phẩm 002';
        $product->description = 'Hoa Cúc';
        $product->price = 2.5;
        $product->save();

        $product = new \App\Product();
        $product->name = 'Sản phẩm 003';
        $product->description = 'Hoa Hồng';
        $product->price = 1.5;
        $product->save();
    }

}
