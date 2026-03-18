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
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->text('message')->nullable()->change();
            $table->string('fb_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->text('message')->nullable(false)->change();
            $table->dropColumn(['fb_url', 'twitter_url', 'linkedin_url', 'instagram_url']);
        });
    }
};
