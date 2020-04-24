<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('text01');
			$table->string('text02')->nullable();
			$table->timestamp('updated');
			$table->unsignedInteger('user_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}