<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Janr extends Model
{
    use HasFactory;

    protected $casts = ['published' => 'boolean'];

    protected $guarded = ['name'];

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }
}
