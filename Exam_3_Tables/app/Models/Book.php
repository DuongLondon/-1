<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable=[
        'Title',
        'Author',
        'Genre',
        'PubliccationYear',
        'ISBN',
        'CoverImageURL',
    ];
    public function reviews()
    {
        // Chỉ định tên cột khoá ngoại 'BookID' trong quan hệ hasMany của model 'Book'
        // BookID ở tham số thứ hai đại diện cho cột khoá ngoại trong bảng reviews
        // BookID ở tham số thứ ba đại diện cho cột khoá chính ở bảng books
        return $this->hasMany(Review::class, 'BookID', 'id');
    }

    public function books()
    {
        return $this->hasMany(Review::class);
    }
    
}
