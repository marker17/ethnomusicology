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
            $table->string('accession_no');
            $table->string('title')->nullable();

            //this is foreign key to the categories table
            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
            
            $table->string('author')->nullable();
            $table->string('groupcountry')->nullable();
            $table->string('year')->nullable();
            $table->string('description')->nullable();
            $table->text('notes')->nullable();
            $table->string('picture')->nullable();
            $table->string('photodate')->nullable();
            $table->string('photographer')->nullable();
            $table->string('relatedimages')->nullable();
            $table->string('originalformat_type')->nullable();
            $table->string('originalformat_description')->nullable();
            $table->string('eformat_type')->nullable();
            $table->string('eformat_description')->nullable();
            $table->string('original_location')->nullable();
            $table->string('elocation')->nullable();
            $table->string('provenance_notes')->nullable();
            $table->string('instrumentcatalog_no')->nullable();
            $table->string('instrumentcategory_no')->nullable();
            $table->string('instrument_localname')->nullable();
            $table->string('instrument_englishname')->nullable();
            $table->string('musicscore_catalogername')->nullable();
            $table->string('musicscore_instrumentation')->nullable();
            $table->string('musicscore_performances')->nullable();
            $table->string('musicscore_category')->nullable();
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->float('diameter')->nullable();
            $table->integer('no_of_pages')->nullable();
            $table->string('original_work')->nullable();
            $table->string('repo')->nullable();
            $table->string('full_score')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
