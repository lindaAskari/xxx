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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 2000);
            // 2000: This is the maximum length of the string that can be stored in the title
            //  column. In this case, the column can hold up to 2000 characters. This is important
            //   for ensuring that the
            //  database can accommodate the expected length of the data without truncation.
            $table->string('slug' , 2000) ;
            $table->string('image' , 2000)->nullable();
            $table->string('imagemim' , 45)->nullable();
            $table->integer('imagesaize')->nullable();
            $table->longText('description')->nullable();
            $table->string('status' , 25);
            $table->decimal('price' , 10 , 2);
            $table->foreignIdFor(User::class , 'createdby' )->nullable();
            // User ::class: This refers to the User  model in Laravel, which typically represents the users table in the database. By using User ::class, Laravel can automatically determine the correct 
            // table name (usually users) and the primary key (usually id) that the foreign key will
            //  reference.
            $table->foreignIdFor(User::class , 'updatedby' )->nullable();
            $table->softDeletes();
            $table->foreignIdFor(User::class , 'deletedby' )->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
