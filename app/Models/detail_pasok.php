<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pasok extends Model
{
    use HasFactory;
    //set tabel
    protected $table = "detail_pasoks";
    //set primary key
    protected $primaryKey = "id";
    //set auto increment
    public $incrementing = false;

    //set tipe data primary key
    protected $keyType = 'string';

    //setting kolom yang dapat diisi
    protected $guarded = [];
}
