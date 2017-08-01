<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    //
    protected $table = 'anaks';
    protected $fillable =['nama','orangtua_id','umur','alamat'];
    protected $visible = ['nama','orangtua_id','umur','alamat'];
    public $timedtamps =true;
   
    public function orangtua()
    {
    return $this->belongsTo('App\orangtuas','orangtua_id');
    }

}
