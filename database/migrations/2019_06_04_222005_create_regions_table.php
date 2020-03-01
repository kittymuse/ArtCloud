<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('名称');
            $table->string('parent_id')->default(0)->comment('父级ID');
            $table->tinyInteger('type')->unsigned()->comment('类型');
        });
    }

    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
