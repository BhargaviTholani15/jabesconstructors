<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->string('name', 255);
            $table->text('comment');
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_comments');
    }
};
