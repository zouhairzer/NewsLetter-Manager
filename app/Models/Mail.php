<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email'
    ];

    public function email_newsletter()
    {
        return $this->hasMany(EmailNewsletter::class);
    }
}
