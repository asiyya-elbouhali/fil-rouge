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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date')->nullable();
            $table->boolean('automatically_renew');
            $table->float('price');
            $table->integer('number_of_device');
            $table->float('total_before_tax');
            $table->float('total_after_tax');
            $table->date('next_due_date');
            $table->boolean('web_hosting');
            $table->boolean('demon_version');
            
            $table->unsignedBigInteger('business_categories_id');
            $table->foreign('business_categories_id')
            ->references('id')
            ->on('business_categories')
            ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id')
            ->references('id')
            ->on('software')
            ->onDelete('cascade');

            $table->unsignedBigInteger('order_status_id');
            $table->foreign('order_status_id')
            ->references('id')
            ->on('order_statuses')
            ->onDelete('cascade');

            $table->unsignedBigInteger('server_id');
            $table->foreign('server_id')
            ->references('id')
            ->on('servers')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
