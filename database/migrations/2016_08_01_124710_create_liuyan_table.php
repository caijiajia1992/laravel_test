<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiuyanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('liuyan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 30);
            $table->string('author', 50);
            $table->text('content');
            $table->integer('addtime');
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
        //
        Schema::drop('liuyan');
    }
}
