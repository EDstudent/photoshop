<?php

use App\User;
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                            'name' => 'Admin',
                            'email' => 'admin@p.p',
                            'password' => bcrypt('qweasd'),
                            'role' => 2,
                    ]);	
            DB::table('users')->insert([
                            'name' => 'John',
                            'email' => 'c@p.p',
                            'password' => bcrypt('qweasd'),
                            'role' => 3,
                    ]);
            
            DB::table('products')->insert([
                            'name' => 'apple',
                            'description' => 'red good juicy',
                    ]);	
            DB::table('products')->insert([
                            'name' => 'juice',
                            'description' => 'made from grean apples with pineaplles',
                    ]);	
		
		
    factory('App\User', 5)->create();
    factory('App\Product', 5)->create();
    }
}
