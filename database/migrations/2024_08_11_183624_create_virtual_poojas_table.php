<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('virtual_poojas', function (Blueprint $table) {
            $table->id();  // 'id' column
            $table->unsignedBigInteger('pooja_id');  // 'pooja_id' column
            $table->date('date');  // 'date' column
            $table->string('image')->nullable();  // 'image' column
            $table->timestamps();  // 'created_at' and 'updated_at' columns
            $table->softDeletes();  // 'deleted_at' column (for soft deletes)
        });

        Schema::create('pooja_details', function (Blueprint $table) {
            $table->id();  // 'id' column
            $table->unsignedBigInteger('pooja_id');  // 'pooja_id' column
            $table->string('name');  // 'name' column
            $table->string('tithi_name')->nullable();  // 'tithi_name' column
            $table->string('lang');  // 'lang' column for language
            $table->timestamps();  // 'created_at' and 'updated_at' columns
        });

        Schema::create('pooja_mandirs', function (Blueprint $table) {
            $table->id();  // 'id' column
            $table->unsignedBigInteger('pooja_id');  // 'pooja_id' column
            $table->string('title');  // 'title' column (mandir address)
            $table->string('lang');  // 'lang' column for language
            $table->timestamps();  // 'created_at' and 'updated_at' columns
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('virtual_poojas');
        Schema::dropIfExists('pooja_details');
        Schema::dropIfExists('pooja_mandirs');
    }
};
