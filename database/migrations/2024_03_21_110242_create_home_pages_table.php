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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_text')->nullable();
            $table->string('res_article')->nullable();
            $table->longText('res_article_desc')->nullable();
            $table->string('pol_brief')->nullable();
            $table->longText('pol_brief_desc')->nullable();
            $table->string('easy_reads')->nullable();
            $table->longText('easy_reads_desc')->nullable();
            $table->string('vid_gall')->nullable();
            $table->longText('vid_gall_desc')->nullable();
            $table->string('action_reserch_head')->nullable();
            $table->string('action_reserch_text')->nullable();
            $table->string('action_image')->nullable();
            $table->string('action_image_2')->nullable();
            $table->string('action_desc_head')->nullable();
            $table->longText('action_desc_para')->nullable();
            $table->string('action_desc_link')->nullable();
            $table->string('extra_1')->nullable();
            $table->string('extra_2')->nullable();
            $table->string('extra_3')->nullable();
            $table->string('extra_4')->nullable();
            $table->string('extra_5')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
