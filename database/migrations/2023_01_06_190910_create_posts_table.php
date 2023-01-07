<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            // $table->unsignedBigInteger('user_id')->name('ユーザーID');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->comment('ユーザーID');
            $table->string('title')->comment('タイトル');
            // $table->foreignId('owner_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('description')->comment('投稿内容');
            $table->string('image')->comment('画像');
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
};
