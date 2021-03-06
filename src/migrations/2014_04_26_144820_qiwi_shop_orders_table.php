<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QiwiShopOrdersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('ff-qiwi-shop')->create('orders', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('item');
			$table->decimal('sum', 15, 2);
			$table->string('tel');
			$table->string('comment');
			$table->string('lifetime');
			$table->string('status');
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
		Schema::connection('ff-qiwi-shop')->drop('orders');
	}

}
