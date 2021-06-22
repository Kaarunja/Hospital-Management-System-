<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'Doc_name', 'Doc_id','Doc_MobileNo','Doc_Email','Doc_password','Doc_address','Specialist_type','Doc_Gender','Doc_Nic'
    ];
}
