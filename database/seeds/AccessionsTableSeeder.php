<?php

use Illuminate\Database\Seeder;



class AccessionsTableSeeder extends Seeder {

	public function run(){
		//we want to clear accessions table
		
		DB::table('accessions')->delete();
		
		

		
		

		


	}
}

