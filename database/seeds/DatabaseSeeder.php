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
                            'password' => bcrypt('asd123'),
                            'role' => 1,
                    ]);	
            DB::table('users')->insert([
                            'name' => 'Edmund',
                            'email' => 'my@p.p',
                            'password' => bcrypt('asd123'),
                            'role' => 2,
                    ]);
            DB::table('users')->insert([
                            'name' => 'John',
                            'email' => 'c@p.p',
                            'password' => bcrypt('qweasd'),
                            'role' => 3,
                    ]);
            DB::table('users')->insert([
                            'name' => 'Mike',
                            'email' => 'a@a.a',
                            'password' => bcrypt('asd123'),
                            'role' => 3,
                    ]);
            
            
            DB::table('products')->insert([
                            'name' => 'apple',
                    ]);	
            DB::table('products')->insert([
                            'name' => 'juice',
                    ]);	
            DB::table('products')->insert([
                            'name' => 'watermellon',
                    ]);
            DB::table('products')->insert([
                            'name' => 'pineaples',
                    ]);
            DB::table('products')->insert([
                            'name' => 'mellon',
                    ]);
            

          
            DB::table('offers')->insert([
                            'user_id' => '3',
                            'product_id' => '2',
                            'price' => '0.50',
                            'country' => 'Latvija',
                            'description' => 'made from grean apples with pineaplles',
                    ]);
            DB::table('offers')->insert([
                            'user_id' => '3',
                            'product_id' => '1',
                            'price' => '0.80',
                            'country' => 'Latvija',
                            'description' => '.........',
                    ]);
            DB::table('offers')->insert([
                            'user_id' => '4',
                            'product_id' => '2',
                            'price' => '3.50',
                            'country' => 'Kazahstan',
                            'description' => ' ',
                    ]);
		
		
    //factory('App\User', 5)->create();
    //factory('App\Product', 5)->create();
    }
}
