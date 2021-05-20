<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunonjesitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punonjesit', function (Blueprint $table) {
            $table->id();
            $table->string('emer');
            $table->string('mbiemer');
            $table->string('pozicioni');
            $table->double('paga_ore');
            $table->date('data_rregjister');
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
        Schema::dropIfExists('punonjesit');
    }
}
