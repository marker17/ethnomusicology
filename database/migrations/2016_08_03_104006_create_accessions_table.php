<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessions', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('title');

            $table->string('description');
            $table->text('notes');
            $table->string('provenance_notes');

            //foreign key to authors table
            $table->integer('author_id')->unsigned();
            
                 
            //foreign key to categories table   
            $table->integer('category_id')->unsigned();
            

            //foreign key to group/country table  
            $table->integer('groupcountry_id')->unsigned();
            
                  

            //foreign key to year table         
            $table->integer('year_id')->unsigned();
           
                  



            //foreign key to pics table  
            $table->integer('pic_id')->unsigned();
           

             //foreign key to original format type table       
            $table->integer('originalformattype_id')->unsigned();
           

            //foreign key to e-format type table     
            $table->integer('eformattype_id')->unsigned();
           

            //foreign key to original location table       
            $table->integer('originallocation_id')->unsigned();
           


             //foreign key to e-location table       
            $table->integer('elocation_id')->unsigned();
           
                

            $table->integer('dimension_id')->unsigned();
            


           






            $table->timestamps();
        });


        Schema::create('accessions', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('groupcountry_id')->references('id')->on('groupcountries');
            $table->foreign('year_id')->references('id')->on('years');
            $table->foreign('pic_id')->references('id')->on('pics');
            $table->foreign('originalformattype_id')->references('id')->on('originalformattypes');
            $table->foreign('eformattype_id')->references('id')->on('eformattypes');
            $table->foreign('originallocation_id')->references('id')->on('originallocations');

            $table->foreign('elocation_id')->references('id')->on('elocations');
            $table->foreign('dimension_id')->references('id')->on('dimensions');

                  
                  
                
                  

                  
                 

            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accessions');
    }
}
