<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('original')->nullable();
            $table->string('link')->nullable();
            $table->string('thumb_img')->nullable();
            $table->string('card_img')->nullable();
            $table->unsignedInteger('publisher');
            $table->string('ip');
            $table->unsignedInteger('is_published')->default(0);
            $table->unsignedInteger('type'); // 1.image 2.audio 3.video 99.unknown
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
        Schema::dropIfExists('posts');
    }
}
