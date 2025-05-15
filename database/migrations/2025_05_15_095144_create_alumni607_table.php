<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumni607Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni607', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim',8)->unique();
            $table->string('namalengkap',255);
            $table->year('angkatan');
            $table->string('email',100);
            $table->string('no_telp',15);
            $table->string('alamat',255);
            $table->string('linkedin',255);
            $table->string('foto',255);
            $table->string('company',255);
            $table->string('job_title',100);
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
        Schema::dropIfExists('alumni607');
    }
}
