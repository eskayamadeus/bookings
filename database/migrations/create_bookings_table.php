<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            // some users may be anonymous. i.e. a walk-in customer may not have an account created for him. 
            // Therefore, we need to be able to associate them by their names only.
            // App should fill in the name in such an instance and then the user ID when there is a registered user.
            $table->foreignId('user_id')->constrained()->nullable();
            $table->date('booking_date');
            $table->time('booking_time');
            $table->longText('comments')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('bookings');
    }
}
