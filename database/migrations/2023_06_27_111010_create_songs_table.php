<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('release_date')->default(\Carbon\Carbon::today());
            $table->text('lyrics');
            $table->unsignedBigInteger('musician_id');
            $table->foreign('musician_id')->references('id')->on('musicians')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('songs');
    }
};