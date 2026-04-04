<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id('seo_id');
            $table->string('url', 250)->nullable();
            $table->string('title', 250)->nullable();
            $table->string('description', 1000)->nullable();
            $table->string('keywords', 1000)->nullable();
            $table->text('meta')->nullable();
            $table->text('schema')->nullable();
            $table->text('gtag_head')->nullable();
            $table->text('gtag_body')->nullable();
            $table->datetime('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seo');
    }
};
