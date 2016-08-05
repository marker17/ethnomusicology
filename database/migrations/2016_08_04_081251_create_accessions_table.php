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

           

            $table->increments('id');
            $table->string('title');

            //this is foreign key to the categories table
            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
            
            $table->string('author');
            $table->string('groupcountry');
            $table->string('year');
            $table->string('description');
            $table->text('notes');
            $table->string('picture');
            $table->string('photodate');
            $table->string('photographer');
            $table->string('relatedimages');
            $table->string('originalformat_type');
            $table->string('originalformat_description');
            $table->string('eformat_type');
            $table->string('eformat_description');
            $table->string('original_location');
            $table->string('elocation');
            $table->string('provenance_notes');
            $table->string('instrumentcatalog_no');
            $table->string('instrumentcategory_no');
            $table->string('instrument_localname');
            $table->string('instrument_englishname');
            $table->string('musicscore_catalogername');
            $table->string('musicscore_instrumentation');
            $table->string('musicscore_performances');
            $table->string('musicscore_category');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('diameter');
            $table->integer('no_of_pages');
            $table->string('original');
            $table->string('repo');
            $table->string('full_score');
            $table->timestamps();
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
