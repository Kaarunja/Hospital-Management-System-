<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receptionist extends Model
{
    use HasFactory;
    protected $fillable = [
        'Receptionist_ID', 'Receptionist_Name','Receptionist_email','Phone_no'
    ];
}
