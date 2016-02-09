<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    //
    protected  $fillable = ['nama_lengkap','alamat','no_rekening','foto', 'saldo'];

    function transaksi()
    {
        return $this->hasMany('App\Transaksi');
    }
}
