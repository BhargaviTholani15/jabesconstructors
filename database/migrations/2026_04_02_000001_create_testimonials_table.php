<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('designation', 255)->nullable();
            $table->text('review');
            $table->string('image_path', 500)->nullable();
            $table->integer('order_no')->nullable();
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
