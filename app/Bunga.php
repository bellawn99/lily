<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bunga extends Model
{

     // define the table
     protected $table = 'bunga';
     // primary key
     protected $primaryKey = 'kode_bunga';

    public $timestamps = false;
    function transaksi()
    {
        return $this->belongsTo('App\Transaksi', 'id');
    }

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_bunga', 'nama_bunga', 'harga', 'deskripsi', 'jumlah', 'gambar'
    ];
}
