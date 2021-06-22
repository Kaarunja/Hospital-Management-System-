<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working_period extends Model
{
    use HasFactory;
    protected $fillable = [
        'Period_ID','Doctor_ID','Date','No_of_Patients'
       
    ];
}
