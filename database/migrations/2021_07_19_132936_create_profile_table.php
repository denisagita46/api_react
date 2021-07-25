<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
			$table->bigIncrements('id');
            $table->date('tanggal_join');
            $table->String('jenis_kelamin');
			$table->String('usia');
			$table->String('email');
			$table->Integer('phone');
			$table->String('hobby');
			$table->String('Alamat');
			$table->String('slug');
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
        Schema::dropIfExists('profile');
    }
}
