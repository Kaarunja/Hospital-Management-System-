<?php

namespace App\Http\Controllers;
use App\Models\Medicine_stock;
use Illuminate\Http\Request;

class MedicineStockController extends Controller
{
    public function index()
    {
        $medicine_stocks = Medicine_stock::latest()->paginate(10);
  
        return view('medicine_stocks.index',compact('medicine_stocks'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine_stocks.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Med_No' => 'required',
            'Med_Name' => 'required',
            'Dosage' => 'required',
            'Consumption_time' => 'required',
            'Unit_Price' => 'required',
            'Exp_Date' => 'required',
            'Manu_Date' => 'required',
            'Quantity' => 'required',
        ]);
  
        Medicine_stock::create($request->all());
   
        return redirect()->route('medicine_stocks.index')
                        ->with('success','Stock created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine_stock  $medicine_stock
     * @return \Illuminate\Http\Response
     */
   /* public function show(Medicine_stock $medicine_stock)
    {
        return view('medicine_stocks.show',compact('medicine_stock'));
    }
   
    
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine_stock  $medicine_stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine_stock $medicine_stock)
    {
        return view('medicine_stocks.edit',compact('medicine_stock'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine_stock  $medicine_stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine_stock $medicine_stock)
    {
        $request->validate([
            'Med_No' => 'required',
            'Med_Name' => 'required',
            'Dosage' => 'required',
            'Consumption_time' => 'required',
            'Unit_Price' => 'required',
            'Exp_Date' => 'required',
            'Manu_Date' => 'required',
            'Quantity' => 'required',
        ]);
  
        $medicine_stock->update($request->all());
  
        return redirect()->route('medicine_stocks.index')
                        ->with('success','Stock updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine_stock  $medicine_stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine_stock $medicine_stock)
    {
        $medicine_stock->delete();
  
        return redirect()->route('medicine_stocks.index')
                        ->with('success','Stock deleted successfully');
    }
}
