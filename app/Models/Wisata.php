<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = ['nama','deskripsi','harga','foto'];
    protected $table = 'wisatas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamp = true;
}
