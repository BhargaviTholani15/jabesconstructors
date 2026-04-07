<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('category_ids')->nullable()->after('author');
            $table->datetime('published_at')->nullable()->after('category_ids');
            $table->integer('minutes_to_read')->nullable()->after('published_at');
            $table->integer('view_counts')->default(0)->after('minutes_to_read');
            $table->integer('likes')->default(0)->after('view_counts');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['category_ids', 'published_at', 'minutes_to_read', 'view_counts', 'likes']);
        });
    }
};
