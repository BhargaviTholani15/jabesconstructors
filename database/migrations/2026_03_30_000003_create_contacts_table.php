<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('subject', 255)->nullable();
            $table->string('message', 1000);
            $table->datetime('created_at');
            $table->integer('active_flag')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
