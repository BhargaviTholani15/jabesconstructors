<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('designation', 255)->nullable();
            $table->string('image_path', 500)->nullable();
            $table->string('facebook', 500)->nullable();
            $table->string('instagram', 500)->nullable();
            $table->string('linkedin', 500)->nullable();
            $table->string('twitter', 500)->nullable();
            $table->integer('order_no')->nullable();
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
