<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'BookID',
        'UserID',
        'Rating',
        'ReviewText',
        'ReviewDate',
    ];
    use HasFactory;
}
