<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'author', 'category', 'content', 'image', 'link'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function email_newsletter()
    {
        return $this->hasMany(EmailNewsletter::class);
    }
}
