<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('addresses', function (Blueprint $table) {
         $table->id();
         $table->integer('user_id');
         $table->string('first_name');
         $table->string('last_name');
         $table->string('phone');
         $table->string('email');
         $table->string('address');
         $table->string('city');
         $table->string('state');
         $table->string('zip_code');
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('addresses');
   }
}
