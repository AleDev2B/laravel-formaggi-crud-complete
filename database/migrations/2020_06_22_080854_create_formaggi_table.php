<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaggi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('colore');
            $table->string('stagionatura');
            $table->string('provenienza');
            $table->string('certBiologica');
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
        Schema::dropIfExists('formaggi');
    }
}
