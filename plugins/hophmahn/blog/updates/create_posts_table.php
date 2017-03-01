<?php namespace Hophmahn\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('hophmahn_blog_posts');
        Schema::create('hophmahn_blog_posts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->text('text');
            $table->string('locale');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hophmahn_blog_posts');
    }
}
