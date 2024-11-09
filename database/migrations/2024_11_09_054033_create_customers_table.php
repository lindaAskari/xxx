<?php

use App\Models\User;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class , 'userid' )->nullable();
            $table->string('firstname' , 45);
            $table->string('lastname' , 45);
            $table->string('phone' , )->nullable();
            $table->string('status' , 45)->nullable();
            $table->timestamps();
            $table->foreignIdFor(User::class , 'createdby' )->nullable();
            $table->foreignIdFor(User::class , 'updatedby' )->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
