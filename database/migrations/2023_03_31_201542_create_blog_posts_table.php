<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('blogcat_id');
            $table->integer('user_id')->nullable();
            $table->string('post_title')->nullable();
            $table->string('post_slug')->nullable();
            $table->string('post_image')->nullable();
            $table->text('short_descp')->nullable();
            $table->text('long_descp')->nullable();
            $table->string('post_tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
