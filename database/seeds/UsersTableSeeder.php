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
            'brand_name' => 'Samsung',
        	],
        	[
            'brand_name' => 'Apple',
        	],
        	[
            'brand_name' => 'Hp',
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

        DB::table('countrys')->insert([
            [
            'country_name' => 'Bangladesh',
            'shipping_charge' => '5',
            ],
            [
            'country_name' => 'India',
            'shipping_charge' => '6',
            ],
            [
            'country_name' => 'Pakistan',
            'shipping_charge' => '7',
            ],
            [
            'country_name' => 'Nepal',
            'shipping_charge' => '8',
            ],
            
        ]);

        DB::table('admins')->insert([
            [
            'admin_email' => 'alamin@gmail.com',
            'admin_password' =>'alamin',
            'admin_name' => 'alamin',
            ],
           
            
        ]);
    }
}
