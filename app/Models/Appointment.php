<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = [
        'Date', 'Time','NIC_No','Doctor_Name','Specialization','Appointment_No'
       
    ];

   
}
