<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
//    protected $primaryKey = 'id';
//    protected $table = 'addresses';
//    public $timestamps = false;
    protected $fillable =[
        'name',
        'city',
        'area',
        'street',
        'house',
        'additional',
    ];
    
//    public function user() {
//        return $this->belongsTo('App\User');
//    }
}
