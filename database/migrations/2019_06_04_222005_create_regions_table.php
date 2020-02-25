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
            $table->string('name')->default('')->comment('省市县名称');
            $table->string('parent_id')->default(0)->comment('父级id');
            $table->enum('type', ['province', 'city', 'area', 'street'])->default('province')->comment('类型');
        });
    }

    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
