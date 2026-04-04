<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('degree', 250)->nullable();
            $table->string('department', 250)->nullable();
            $table->string('image_path', 1000)->nullable();
            $table->integer('order_no')->nullable();
            $table->boolean('active_flag')->default(1);
            $table->datetime('created_at');
            $table->datetime('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
