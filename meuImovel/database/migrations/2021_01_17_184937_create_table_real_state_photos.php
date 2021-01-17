<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRealStatePhotos extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('real_state_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->boolean('is_thumb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('real_state_photos');
    }
}
