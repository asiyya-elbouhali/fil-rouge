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
        Schema::create('licences', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->text('description');

            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id')
            ->references('id')
            ->on('software')
            ->onDelete('cascade');

            $table->unsignedBigInteger('business_categories_id');
            $table->foreign('business_categories_id')
            ->references('id')
            ->on('business_categories')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licence');
    }
};
