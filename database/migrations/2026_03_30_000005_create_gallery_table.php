<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->string('image_title', 255);
            $table->string('image_path', 255)->nullable();
            $table->string('type', 255);
            $table->string('video_path', 255)->nullable();
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
