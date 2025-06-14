<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('freelancer_education', function (Blueprint $table) {
            $table->foreignId('education_level_id')->constrained('education_levels');
            $table->date('education_year');
            $table->string('university');
            $table->string('specialization');
            $table->string('attachment')->nullable();
            $table->foreignId('freelancer_id')->constrained('freelancers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancer_education');
    }
};
