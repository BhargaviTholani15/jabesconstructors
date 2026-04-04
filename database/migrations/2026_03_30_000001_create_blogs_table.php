<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title', 255);
            $table->string('blog_image', 255);
            $table->text('blog_summery');
            $table->longText('blog_description');
            $table->text('slug')->nullable();
            $table->string('author', 250)->nullable();
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at');
            $table->datetime('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
