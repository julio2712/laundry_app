<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table="table_paket";

    protected $fillable = ['tipe','harga'];
}
