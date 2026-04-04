<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('gallery', function (Blueprint $table) {
            $table->string('video_url', 1000)->nullable()->after('video_path');
            $table->text('slideshow_images')->nullable()->after('video_url');
        });
    }

    public function down(): void
    {
        Schema::table('gallery', function (Blueprint $table) {
            $table->dropColumn(['video_url', 'slideshow_images']);
        });
    }
};
