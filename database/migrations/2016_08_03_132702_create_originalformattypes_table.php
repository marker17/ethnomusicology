<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOriginalformattypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('originalformattypes', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('original_formattype');
            $table->string('original_formattype_description');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('originalformattypes');
    }
}
