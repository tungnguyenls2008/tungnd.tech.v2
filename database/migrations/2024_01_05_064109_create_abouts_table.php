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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('about_description');
            $table->text('about_additional_description');
            $table->string('about_title');
            $table->string('background_img');
            $table->string('avatar_img');
            $table->timestamp('about_bod');
            $table->string('about_phone');
            $table->string('about_email');
            $table->string('about_address');
            $table->text('facts_description');
            $table->integer('facts_num_1');
            $table->integer('facts_num_2');
            $table->integer('facts_num_3');
            $table->integer('facts_num_4');
            $table->text('skills_description');
            $table->string('twitter_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('zalo_link');
            $table->string('linkin_link');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
