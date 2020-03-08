<?php

use Illuminate\Support\Facades\Schema;
use App\Enums\{AddressDefault, Status};
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('user_id')->unsigned()->comment('用户ID');
            $table->string('consignee', 32)->comment('收货人');
            $table->string('phone', 11)->comment('手机号码');
            $table->string('regions', 32)->comment('所在地区');
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
        Schema::dropIfExists('user_addresses');
    }
}
