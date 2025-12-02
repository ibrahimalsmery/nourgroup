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
        Schema::create('staffing_for_company_requests', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('general_manger');
            $table->string('email');
            $table->string('phone');
            $table->string('sector');
            $table->string('service_type');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffing_for_company_requests');
    }
};
