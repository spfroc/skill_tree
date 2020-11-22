<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNodesTableAddTreeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nodes', function (Blueprint $table) {
            $table->unsignedBigInteger('tree_id')->default(1)->after('id')->comment('树id');
//            $table->foreign('tree_id')->references('id')->on('trees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
