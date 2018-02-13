<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = "sinhvien";
    public $timestamps = false;
    protected $primaryKey = "id";

    public $fillable = [
        'id', 'name', 'age', 'adress'
    ];
}
