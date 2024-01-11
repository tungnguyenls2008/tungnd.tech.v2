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
        Schema::create('resume_details', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('time');
            $table->string('place');
            $table->string('description');
            $table->text('details');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_details');
    }
};
