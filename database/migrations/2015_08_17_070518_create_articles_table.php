<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug');
            $table->text('content_html');
            $table->text('content_raw');
            $table->text('meta_description');
            $table->string('video');
            $table->string('url');
            $table->string('img');
            $table->integer('category_id');
            $table->string('role_article_id');
            $table->timestamps();
            $table->dateTime('published_at');
            $table->integer('created_by');
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
