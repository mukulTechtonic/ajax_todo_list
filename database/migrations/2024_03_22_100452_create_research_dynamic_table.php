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
        Schema::create('research_dynamic', function (Blueprint $table) {
            $table->id();
            $table->longText('res_article_tittle')->nullable();
            $table->longText('res_article_heading')->nullable();
            $table->longText('res_article_para')->nullable();
            $table->string('res_article_related')->nullable();
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
        Schema::dropIfExists('research_dynamic');
    }
};
