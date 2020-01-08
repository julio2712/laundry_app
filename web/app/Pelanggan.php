<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table="table_pelanggan";

    protected $fillable = ['nama','alamat','telepon','email'];
}
