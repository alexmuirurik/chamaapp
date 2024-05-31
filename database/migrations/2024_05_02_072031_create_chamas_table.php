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
        Schema::create('chamas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->text('description');
            $table->float('monthly_savings', 10, 2);
            $table->string('meeting_frequency');
            $table->string('available_loans');
            $table->float('loan_interest', 10, 2);
            $table->string('bank_account');
            $table->float('bank_balance', 10, 2);
            $table->integer('member_count');
            $table->boolean('manager');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamas');
    }
};
