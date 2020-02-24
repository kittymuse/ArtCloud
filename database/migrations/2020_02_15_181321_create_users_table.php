<?php

use App\Enums\{UserRole, UserSex, Status};
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
            $table->smallInteger('studio_id')->unsigned()->nullable()->comment('机构ID');
            $table->tinyInteger('role')->unsigned()->comment('身份');
            $table->string('phone', 11)->unique()->comment('手机号');
            $table->string('name', 32)->comment('昵称');
            $table->tinyInteger('sex')->nullable()->unsigned()->default(UserSex::SECRET)->comment('性别');
            $table->string('avatar', 100)->nullable()->comment('头像');
            $table->string('school', 32)->nullable()->comment('院校');
            $table->tinyInteger('is_tourist')->unsigned()->comment('是否为游客');
            $table->text('last_token')->nullable()->comment('登陆时的Token');
            $table->tinyInteger('status')->unsigned()->default(Status::NORMAL)->comment('状态');
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
