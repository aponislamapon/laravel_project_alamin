<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	[
            'brand_name' => 'Apple',
        	],
        	[
            'brand_name' => 'Samsung',
        	],
        	[
            'brand_name' => 'Lenovo',
        	],
        	[
            'brand_name' => 'HP',
        	],
            
        ]);
        DB::table('cats')->insert([
        	[
            'category_name' => 'Mobile',
        	],
        	[
            'category_name' => 'Laptop',
        	],
        	[
            'category_name' => 'Nootbook',
        	],
        	[
            'category_name' => 'Probook',
        	],
            
        ]);
    }
}
