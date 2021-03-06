<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmobileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('immobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('state');
            $table->string('city'); 
            $table->string('neighborhood');
            $table->integer('number');
            $table->integer('operation_id');
            $table->string('cep');
            $table->string('type');
            $table->string('bedroom');
            $table->float('area', 8, 2);
            $table->float('value', 8, 2);
            $table->text('description');
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
        Schema::dropIfExists('immobiles');
    }
}
