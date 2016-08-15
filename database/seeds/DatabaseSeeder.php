<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccessionsTableSeeder::class);
        // 
   		
    	factory(App\Accession::class, 35)->create();






    }

 
}
