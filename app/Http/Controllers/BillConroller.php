<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Bill;
use App\Models\Medicine_stock;
use App\Models\Transaction;


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BillConroller extends Controller
{
    public function store(Request $request)
    {
     // return $request->all();
       DB::transaction(function() use ($request)
       {
            $customers=new Customer;
            $customers->PatientID=$request->PatientID;
            $customers->PatientAddress=$request->PatientAddress;
            $customers->save();
            $bill_id=$customers->id;

            for($Med_Name=0; $Med_Name<count($request->Med_Name);$Med_Name++)
            {
                $bills=new Bill;
                 $bills->bill_id=$bill_id;
                $bills->Med_Name=$request->Med_Name[$Med_Name];
                $bills->Quantity=$request->Quantity[$Med_Name];
                $bills->Unit_Price=$request->Unit_Price[$Med_Name];
                $bills->Discount=$request->Discount[$Med_Name];
                $bills->Total=$request->Total[$Med_Name];
                $bills->save();
            }
          //  $transactions=new Transaction;
         //  $transactions->bill_id=$bill_id;
         //  $transactions->total=$request->total;
          //  $transactions->save();
         

            $medicine_stocks=Medicine_stock::all();
            $bills=Bill::where('bill_id',$bill_id)->get();
            
            $orderedBy=Customer::where('id',$bill_id)->get();
            
           // return view('blade-scafolding.pharmasist',['medicine_stocks'=>$medicine_stocks,'bills'=>$bills]);
            return view('blade-scafolding.pharmasist',
            [
                'medicine_stocks'=> $medicine_stocks,
                'bills'=>$bills,
                'customers'=>$orderedBy
            ] ); 
        });
        return redirect()->back()->with('success','data insert successfully');
      //  return "Fails to Inserted! check your inputs!";
                
      // [
       // 'bill_id','Med_Name', 'Quantity','Unit_Price','Discount','Total'
      // ];

    }
    public function getAllDetails()
    {
        $bills=Bill::all();
        return view('blade-scafolding.pharmasist');
    }
}
