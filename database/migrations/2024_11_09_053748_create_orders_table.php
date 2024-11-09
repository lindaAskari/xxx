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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_price' , 10 , 2);
            // 10: This is the total number of digits that can be stored in
            //  the total_price column,
            //  including both
            //  the integer and fractional parts. This means that the maximum
            //   value that can be stored in this column is 9,999,999.99 (seven digits
            //    before the decimal point and two digits after).

            // 2: This specifies the number of digits that can be stored after 
            // the decimal point. In this case, it allows for two decimal places, 
            // which is common for representing currency values (e.g., dollars and cents).
            $table->string('status' , 45);
            $table->timestamps();
            $table->foreignIdFor(User::class , 'created_by' )->nullable();
            $table->foreignIdFor(User::class , 'updated_by' )->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
