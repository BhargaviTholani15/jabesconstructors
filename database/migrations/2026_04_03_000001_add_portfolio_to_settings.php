<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('settings')->updateOrInsert(
            ['key' => 'portfolio_pdf'],
            ['value' => '', 'updated_at' => now()]
        );
    }

    public function down(): void
    {
        DB::table('settings')->where('key', 'portfolio_pdf')->delete();
    }
};
