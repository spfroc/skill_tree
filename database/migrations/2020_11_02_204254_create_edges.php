<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source');
            $table->unsignedBigInteger('target');
            $table->foreign('source')->references('id')->on('nodes');
            $table->foreign('target')->references('id')->on('nodes');
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
        Schema::dropIfExists('edges');
    }
}
