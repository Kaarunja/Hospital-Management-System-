<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    //protected $primaryKey = 'Med_No';
   public $incrementing = true;
  
    //protected $keyType='String';
    protected $fillable=['PatientID','PatientAddress'];
    public function billdetail()
    {
      return $this->hasMany('App\Models\Bill');
    }
}
