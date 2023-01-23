<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Product extends Model
{
    use HasFactory;
    protected $fillable= [
        'title',
        'country',
        'price',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
        //un product pertenece a un solo user
    }
}
