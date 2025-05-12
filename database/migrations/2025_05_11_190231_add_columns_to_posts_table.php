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
        Schema::table('posts', function (Blueprint $table) {
            $table->boolean('allow_comments')->default(true)->after('is_trending');
            
            // Visibility settings
            $table->enum('visibility', ['public', 'private', 'password_protected'])->default('public')->after('allow_comments');
            $table->string('password')->nullable()->after('visibility');
            
            // Scheduled publishing
            $table->timestamp('scheduled_at')->nullable()->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'allow_comments',
                'visibility',
                'password',
                'scheduled_at'
            ]);
        });
    }
};
