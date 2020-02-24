<?php

use App\Enums\{AddressDefault, Status};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('user_id')->unsigned()->comment('用户ID');
            $table->string('consignee', 32)->comment('收货人');
            $table->string('phone', 11)->comment('手机号码');
            $table->smallInteger('province')->unsigned()->comment('省');
            $table->smallInteger('city')->unsigned()->comment('市');
            $table->smallInteger('areas')->unsigned()->comment('区');
            $table->text('detail')->comment('详细地址');
            $table->tinyInteger('is_default')->unsigned()->default(AddressDefault::NOT_YET)->comment('是否为默认地址');
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
        Schema::dropIfExists('users_addresses');
    }
}
