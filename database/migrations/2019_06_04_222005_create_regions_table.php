<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('name', 32)->comment('名称');
            $table->mediumInteger('parent_id')->unsigned()->comment('父级ID');
            $table->tinyInteger('type')->unsigned()->comment('类型');
        });
    }

    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
