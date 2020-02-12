<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->smallInteger('studio_id')->nullable()->comment('机构ID');
            $table->string('phone', 11)->unique()->comment('手机号');
            $table->string('name', 32)->comment('昵称');
            $table->string('avatar', 100)->nullable()->comment('头像');
            $table->tinyInteger('sex')->default(0)->comment('性别');
            $table->text('last_token')->nullable()->comment('登陆时的Token');
            $table->tinyInteger('status')->default(0)->comment('状态');
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
        Schema::dropIfExists('users');
    }
}
