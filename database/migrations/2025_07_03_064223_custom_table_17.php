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
    { Schema::create('custom_table_17',function (Blueprint $table) {
            $table->id();
            $table->string('field_1');
            $table->string('field_2');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
