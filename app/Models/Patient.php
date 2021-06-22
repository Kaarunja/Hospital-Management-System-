<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pat_name', 'Pat_id','Pat_MobileNo','Pat_Email','Pat_password','Pat_address','Pat_DateOfBirth','Pat_Gender','Pat_Nic'
    ];
}
