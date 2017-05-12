<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCommentInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('cname');
            $table->string('tname');
            $table->string('frequent');
            $table->string('grade');
            $table->string('comment');
            $table->string('uname');
            $table->rememberToken();
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
        Schema::dropIfExists('comment_infos');
    }
}
