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
            // default primary key created by Laravel
            // $table->id()->primary();
            $table->id();
            // string === 255 character limit
            $table->string("title")->unique();
            // text === 30, 0000 character limit
            $table->text("excerpt")->nullable();
            $table->text("body");
            $table->integer("min_to_read")->default(1);
            $table->string("image_path");
            $table->boolean("is_published");
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