<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Book extends Model
{
    // use HasFactory;
    protected $table = 'books';
    protected $fillable = ['title','price','id_user'];

    public function relUsers()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}