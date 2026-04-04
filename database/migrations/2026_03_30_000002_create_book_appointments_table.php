<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('service', 255);
            $table->string('sub_service', 255)->nullable();
            $table->datetime('booking_date');
            $table->string('message', 1000)->nullable();
            $table->string('status', 255)->default('BOOKED');
            $table->integer('active_flag')->default(1);
            $table->datetime('created_at');
            $table->string('address', 1000)->nullable();
            $table->date('dob')->nullable();
            $table->boolean('patient_flag')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_appointments');
    }
};
