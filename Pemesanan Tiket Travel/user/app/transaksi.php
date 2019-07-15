<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table='transaksi';
    protected $guarded = [];
    protected $fillable = [ 'no','nama','tujuan','harga','jumlah_pesanan','bank'];
}
