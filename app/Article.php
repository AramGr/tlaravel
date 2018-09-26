<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //   If the name of the class is not the same as the name of database table in plural uncomment the row below
//    protected $table ='articles';
    protected $primaryKey ='id';
    public $incrementing = TRUE;
    public $timestamps = TRUE;

    protected $fillable = ['name', 'text', 'img'];
    protected $guarded = ['*'];

    //for soft deletes
    protected $dates = ['deleted_at'];

//    protected $casts = [
//        'name' => 'boolean',
//        'text' => 'array'
//    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //for Listeners and mutators
//    public function getNameAttribute($value)
//    {
//        return 'Hello world - '.$value.' - Hello world';
//    }
//
//    public function setNameAttribute($value)
//    {
//        // some code
//        $this->attributes['name'] = '|'.$value.'|';
//    }



}
