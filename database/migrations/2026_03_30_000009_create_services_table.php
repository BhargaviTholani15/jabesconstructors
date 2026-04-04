<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('service_title');
            $table->text('service_image');
            $table->string('inner_image', 1000)->nullable();
            $table->longText('service_summary');
            $table->longText('service_description');
            $table->string('type', 1000)->nullable();
            $table->text('slug')->nullable();
            $table->boolean('active_flag')->default(1);
            $table->datetime('created_at')->nullable();
            $table->string('created_by', 250)->nullable();
            $table->datetime('updated_at')->nullable();
            $table->string('updated_by', 250)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
