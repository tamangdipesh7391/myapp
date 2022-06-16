<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'duration'
    ];
    public function getCnameAttribute($cname){
        return ucfirst($cname); // making sentence case 
    }
}
