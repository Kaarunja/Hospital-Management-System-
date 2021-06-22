<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    public $incrementing = true;
    protected $fillable = [
       'bill_id','Med_Name','Quantity','Unit_Price','Discount','Total'
      ];
      public function medicine()
      {
        return $this->belongsTo('App\Models\Medicine_stock');
      }
      public function customer()
      {
        return $this->belongsTo('App\Models\Customer');
      }
}
