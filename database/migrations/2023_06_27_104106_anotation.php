<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('annotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Added user_id column
            $table->unsignedBigInteger('song_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Added foreign key constraint
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('annotations');
    }
};