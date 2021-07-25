<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class implement extends Model
{
    //
	 protected $table = 'profile';
    protected $fillable = ['tanggal_join','jenis_kelamin','usia','email','phone','hobby','Alamat';
}
