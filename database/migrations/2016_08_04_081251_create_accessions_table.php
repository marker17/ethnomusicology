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


            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->string('author');
            $table->string('groupcountry');
            $table->string('year');
            $table->string('description');
            $table->string('notes');
            $table->string('picture');
            $table->string('photodate');
            $table->string('photographer');
            $table->string('relatedimages');
            $table->string('originalformat_type');
            $table->string('originalformat_description');
            $table->string('e-format_type');
            $table->string('e-format_description');
            $table->string('original_location');
            $table->string('e-location');
            $table->string('provenance_notes');
            $table->string('instrumentcatalog_no');
            $table->string('instrumentcategory_no');
            $table->string('instrument_localname');
            $table->string('instrument_englishname');
            $table->string('musicscore_catalogername');
            $table->string('musicscore_instrumentation');
            $table->string('musicscore_performance');
            $table->string('musicscore_category');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('diameter');
            $table->integer('no_of_pages');
            $table->string('original');
            $table->string('repo');
            $table->string('full_score');
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
