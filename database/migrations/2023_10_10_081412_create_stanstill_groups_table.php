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
        Schema::create('stanstill_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->boolean('active');
            $table->boolean('oee');
            $table->boolean('nutzung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stanstill_groups');
    }
};
