<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pannel extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'produit_id'];
}
