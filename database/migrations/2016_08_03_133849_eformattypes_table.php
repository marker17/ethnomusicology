<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EformattypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eformattypes', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('eformattype');
            $table->string('eformattype_description');
          
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eformattypes');
    }
}
