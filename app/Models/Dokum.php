<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokum extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'judul', 
        'foto'
    ];
}
