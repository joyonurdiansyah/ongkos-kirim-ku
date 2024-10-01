<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->string('seller_pickup_name');
            $table->date('seller_pickup_date');
            $table->time('seller_pickup_time');
            $table->string('seller_address');
            $table->string('seller_district');
            $table->string('seller_city');
            $table->string('seller_vehicle');
            $table->text('seller_note')->nullable();
            $table->string('seller_contact_name');
            $table->string('seller_contact_email');
            $table->string('seller_contact_phone');
            
            // Menambahkan kolom buyer
            $table->string('buyer_name')->nullable();
            $table->date('buyer_pickup_date')->nullable();
            $table->time('buyer_pickup_time')->nullable();
            $table->string('buyer_address')->nullable();
            $table->string('buyer_district')->nullable();
            $table->string('buyer_city')->nullable();
            $table->string('buyer_vehicle')->nullable();
            $table->text('buyer_note')->nullable();
            $table->string('buyer_contact_name')->nullable();
            $table->string('buyer_contact_email')->nullable();
            $table->string('buyer_contact_phone')->nullable();
            
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
        Schema::dropIfExists('pickups');
    }
}
