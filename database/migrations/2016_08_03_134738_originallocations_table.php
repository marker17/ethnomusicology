<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OriginallocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('originallocations', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('originallocation');
            $table->string('originallocation_description');

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('originallocations');
    }
}
