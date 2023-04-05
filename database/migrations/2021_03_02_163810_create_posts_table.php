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
            $table->string('decor');
            $table->bigInteger('cat_id')->unsigned();
            $table->string('length');
            $table->string('width');
            $table->string('thickness');
            $table->string('manufacturer');
            $table->string('price');
            $table->string('availability');
            $table->string('image');
            $table->text('description');
            $table->string('coating');
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
