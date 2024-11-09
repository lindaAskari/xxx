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
        Schema::create('countries', function (Blueprint $table) {
            $table->string('code', 3)->primary();
            $table->string('name', 255);
            $table->jsonb('states')->nullable();
            // jsonb: This method is used to create a column of type JSONB in a PostgreSQL database.
            //  The JSONB data type stores JSON (JavaScript Object Notation) data in a binary format, 
            //  which allows for efficient storage and querying. It is more efficient than the regular
            //  JSON type in PostgreSQL because it supports indexing and is faster for certain operations.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
