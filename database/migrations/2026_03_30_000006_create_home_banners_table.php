<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_banners', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 1000)->nullable();
            $table->string('image_path', 255);
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_banners');
    }
};
