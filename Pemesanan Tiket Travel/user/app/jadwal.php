<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
	protected $table ='jadwal';
    protected $guarded = [];
    protected $fillable = [ 'no','berangkat','tujuan','harga','mobil','warna','no_polisi','kursi_tersedia'];
}
