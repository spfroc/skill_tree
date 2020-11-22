<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('label')->comment('节点名称');
            $table->string('total_time')->comment('所需要的总时间');
            $table->string('time_used')->comment('已投入时间时间');
            $table->string('description')->default('现无描述')->comment('技能描述');
            $table->enum('type', ['rect-xml', 'circle', 'rect', 'diamond'])->comment('节点类型');
            $table->enum('background_type', ['img', 'color'])->comment('背景类型 图片 颜色');
            $table->string('background_color')->default('#333')->comment('背景颜色代码');
            $table->string('background_image')->default('https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3559146562,138019164&fm=15&gp=0.jpg')->comment('背景图片地址');
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
        Schema::dropIfExists('nodes');
    }
}
