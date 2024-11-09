<?php

use App\Models\Order;
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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Order::class , 'orderid' );
            $table->string('first_name' , 45);
            $table->string('last_name' , 45);
            // $table->string('email' , 45);
            $table->string('phone' , 45)->nullable();
            $table->string('address1' , 225);
            $table->string('address2' , 225);
            $table->string('city' , 225);
            $table->string('state' , 45)->nullable();
            $table->string('zipcode' , 45);
            $table->string('countrycode' , 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
