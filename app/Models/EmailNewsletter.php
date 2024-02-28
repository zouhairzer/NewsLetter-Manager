<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailNewsletter extends Model
{
    use HasFactory;

    public function mail()
    {
        return $this->belongsTo(Mail::class);
    }

    public function newsletter()
    {
        return $this->belongsTo(Newsletter::class);
    }
}
