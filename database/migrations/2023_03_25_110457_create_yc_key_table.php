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
        Schema::create('keys', function (Blueprint $table) {
            $table->id();
            $table->string('initial_key');
            $table->string('activated_key');
            $table->string('device_number');
            $table->date('expiration_date');
            $table->boolean('auto_renewal');

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onDelete('cascade');

            $table->unsignedBigInteger('key_statuses_id');
            $table->foreign('key_statuses_id')
            ->references('id')
            ->on('key_statuses')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key');
    }
};
