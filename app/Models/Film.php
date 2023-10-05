<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guarded = ['name', 'published', 'img'];

//    protected function img(): Attribute
//    {
//        return Attribute::make(
////            get: fn (string $value) =>  'img/no.img',
//            get: fn (string $value) => !$value?  'img/no.img' : $value,
//        );
//    }

    public function getImgAttribute($value)
    {
        $img = !$value? 'img/no.png'  : $value;
        return $img;
    }

    public function janrs()
    {
        return $this->belongsToMany(Janr::class);
    }
}
