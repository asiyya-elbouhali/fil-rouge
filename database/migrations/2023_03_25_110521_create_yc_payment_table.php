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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('transaction_date');
            $table->float('transaction_number');
            $table->integer('amount');
            $table->unsignedBigInteger('gateway_id');

            $table->foreign('gateway_id')
            ->references('id')
            ->on('gateways')
            ->onDelete('cascade');

            // $table->unsignedBigInteger('invoice_id');
            $table->foreignId('invoice_id')
            ->references('id')
            ->on('invoices')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
