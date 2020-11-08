<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
        
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    } 
         
}