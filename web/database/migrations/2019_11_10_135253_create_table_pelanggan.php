<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama_pelanggan",50);
            $table->string("alamat",100);
            $table->string("telepon",25);
            $table->string("email",50);
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
        Schema::dropIfExists('table_pelanggan');
    }
}
