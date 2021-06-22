<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine_stock extends Model
{
    protected $table = 'medicine_stocks';
    protected $primaryKey = 'Med_No';
   public $incrementing = false;
  
    protected $keyType='String';
      protected $fillable = [
          'Med_No', 'Med_Name','Dosage','Consumption_time','Unit_Price','Exp_Date','Manu_Date','Quantity'
        ];
        public function billdetail()
        {
          return $this->hasMany('App\Models\Bill');
        }
}
