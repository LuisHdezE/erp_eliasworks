<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->longText('description')->nullable();
            $table->string('main_image')->nullable();
            $table->string('external_link')->nullable();
            $table->string('demo_link')->nullable();
            $table->string('repository_link')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->string('status')->default('idea');
            $table->unsignedInteger('sort_order')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['is_published', 'is_featured']);
            $table->index('application_category_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
