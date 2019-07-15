<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penumpang extends Model
{
    protected $table='penumpang';
    protected $guarded = [];
    protected $fillable = ['no','nama','jenis_kelamin','alamat','no_telp','email'];
}
