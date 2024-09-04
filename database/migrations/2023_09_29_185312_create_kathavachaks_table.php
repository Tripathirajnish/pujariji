<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKathavachaksTable extends Migration
{
    public function up()
    {
        Schema::create('kathavachaks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('father_name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('village_flat_number');
            $table->string('police_station');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('other_job');
            $table->string('gst_number')->nullable();
            $table->json('languages');
            $table->json('katha');
            $table->decimal('price', 10, 2);
            $table->string('aadhar_pic');
            $table->text('about');
            $table->string('profile_pic')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kathavachaks');
    }
}
