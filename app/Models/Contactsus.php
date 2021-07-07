<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactsus extends Model
{
    use HasFactory;


    public $fillable = [
        'name', 'email', 'phone', 'subject', 'message'
    ];
}
