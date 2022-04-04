<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            // 'name',
            // 'description',
            // 'image',
            // 'barcode',
            // 'price',
            // 'quantity',
            // 'status'
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'price' => 100,
                'barcode' => '1234567890',
                'status' => '1'
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'price' => 500,
                'barcode' => '1234567890',
                'status' => '1'
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                'price' => 400,
                'barcode' => '1234567890',
                'status' => '1'
            ],
            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'price' => 200,
                'barcode' => '1234567890',
                'status' => '1'
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
