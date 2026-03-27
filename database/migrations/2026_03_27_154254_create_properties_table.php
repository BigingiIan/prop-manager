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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->landlord_id();
            $table->name();
            $table->address();
            $table->enum('property_type', ['apartment', 'house', 'commercial'])->default('apartment');
            $table->kra_pin();
            $table->is_active();
            $table->created_at();
            $table->updated_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
