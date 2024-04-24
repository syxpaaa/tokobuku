<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    //set tabel
    protected $table = "bukus";
    //set primary key
    protected $primaryKey = "id_buku";
    //set auto increment
    public $incrementing = true;

    //set tipe data primary key
    // protected $keyType = 'string';

    //setting kolom yang dapat diisi
    protected $guarded = ['id_buku'];
}
