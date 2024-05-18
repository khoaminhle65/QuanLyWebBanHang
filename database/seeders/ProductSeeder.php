<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tbl_product')->insert([
            'product_id' => 1,
            'product_name' => 'PS5',
            'category_id'=>3,
            'brand_id'=>2,
            'product_desc' => 1,
            'product_image'=>'ps572.jpg',
            'product_price'=>120000,
            'product_content'=>'Hay',
            'product_status' => 1,
        ]);
        DB::table('tbl_product')->insert([
            'product_id' => 2,
            'product_name' => 'ASUS',
            'category_id'=>1,
            'brand_id'=>2,
            'product_desc' => 1,
            'product_image'=>'nghe1.jpg',
            'product_price'=>120000,
            'product_content'=>'Hay',
            'product_status' => 1,
        ]);
        DB::table('tbl_product')->insert([
            'product_id' => 3,
            'product_name' => 'Tai nghe',
            'category_id'=>3,
            'brand_id'=>3,
            'product_desc' => 1,
            'product_image'=>'nghe1.jpg',
            'product_price'=>120000,
            'product_content'=>'Hay',
            'product_status' => 1,
        ]);
        DB::table('tbl_product')->insert([
            'product_id' => 4,
            'product_name' => 'Mac',
            'category_id'=>1,
            'brand_id'=>4,
            'product_desc' => 1,
            'product_image'=>'mac1.jpg',
            'product_price'=>120000000,
            'product_content'=>'Hay',
            'product_status' => 1,
        ]);
        DB::table('tbl_product')->insert([
            'product_id' => 5,
            'product_name' => 'Chuột',
            'category_id'=>1,
            'brand_id'=>4,
            'product_desc' => 1,
            'product_image'=>'g102-2776-421.jpg',
            'product_price'=>20000000,
            'product_content'=>'Nhanh',
            'product_status' => 1,
        ]);
        DB::table('tbl_product')->insert([
            'product_id' => 6,
            'product_name' => 'Lót chuột',
            'category_id'=>2,
            'brand_id'=>4,
            'product_desc' => 1,
            'product_image'=>'hemattroi_1-164.jpg',
            'product_price'=>150000,
            'product_content'=>'Nhanh',
            'product_status' => 1,
        ]);
        DB::table('tbl_product')->insert([
            'product_id' => 7,
            'product_name' => 'Loa marshall',
            'category_id'=>2,
            'brand_id'=>4,
            'product_desc' => 1,
            'product_image'=>'marshall-emberton-cream.jpg',
            'product_price'=>250000,
            'product_content'=>'Nhanh',
            'product_status' => 1,
        ]);
    }
}
