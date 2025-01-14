<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;


    protected $fillable = ['email' , 'name' , 'review' , 'user_id' , 'website_token' , 'rating'];
}
