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
        if (! Schema::hasTable('blog_posts')) {
            Schema::create('blog_posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->string('category')->default('clinical-trials');
                $table->string('category_name')->default('Clinical Trials');
                $table->string('featured_image')->nullable();
                $table->text('excerpt');
                $table->longText('content')->nullable();
                $table->text('key_takeaways')->nullable();
                $table->text('quote_text')->nullable();
                $table->string('section1_title')->nullable();
                $table->text('section1_body')->nullable();
                $table->string('section2_title')->nullable();
                $table->text('section2_body')->nullable();
                $table->string('section3_title')->nullable();
                $table->text('section3_body')->nullable();
                $table->string('read_time')->default('5 min read');
                $table->unsignedBigInteger('views_count')->default(0);
                $table->boolean('is_published')->default(true);
                $table->boolean('is_featured')->default(false);
                $table->timestamp('published_at')->nullable();

                // Advanced SEO Meta Fields
                $table->string('focus_keyword')->nullable();
                $table->string('meta_title', 255)->nullable();
                $table->text('meta_description')->nullable();
                $table->string('meta_keywords', 500)->nullable();
                $table->string('canonical_url', 500)->nullable();
                $table->string('og_title', 255)->nullable();
                $table->text('og_description')->nullable();
                $table->string('og_image', 500)->nullable();
                $table->string('twitter_title', 255)->nullable();
                $table->text('twitter_description')->nullable();
                $table->string('schema_type', 100)->default('MedicalScholarlyArticle');
                $table->string('robots', 100)->default('index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
