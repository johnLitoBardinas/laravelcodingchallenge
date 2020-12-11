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
            // $table->integer('user_id')->unsigned()->index();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            /**
             * 4:01pm 11-24-2020
             * constrained() = Post Table is related to the User table
             * onDelete('cascade') = when the userId is delete then the Post related to that id will be deleted also.
             */
            $table->text('body');
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
