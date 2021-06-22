@extends('medicine_stocks.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Stock</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('medicine_stocks.create') }}" style="font-size: 15px;"> Create new Stocks</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Med_No</th>
            <th>Med_Name</th>
            <th>Dosage</th>
            <th>Consumption_time</th>
            <th>Unit_Price</th>
            <th>Exp_Date</th>
            <th>Manu_Date</th>
            <th>Quantity</th>
            <th>AlertStock</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($medicine_stocks as $medicine_stock)
        <tr>
            
            <td>{{ $medicine_stock->Med_No }}</td>
            <td>{{ $medicine_stock->Med_Name }}</td>
            <td>{{ $medicine_stock->Dosage }}</td>
            <td>{{ $medicine_stock->Consumption_time }}</td>
            <td>{{ $medicine_stock->Unit_Price }}</td>
            <td>{{ $medicine_stock->Exp_Date }}</td>
            <td>{{ $medicine_stock->Manu_Date }}</td>
            <td>{{ $medicine_stock->Quantity }}</td>
            <td>@if ($medicine_stock->AlertStock>= $medicine_stock->Quantity)<span class="badge badge-danger"> Low Stock</span>
            @else
            <span class="badge badge-success">{{ $medicine_stock->AlertStock }}</span>
            @endif
            </td>
            <td>
                <form action="{{ route('medicine_stocks.destroy',$medicine_stock->Med_No) }}" method="POST" class="MedicineStockController">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('medicine_stocks.edit',$medicine_stock->Med_No) }}" style="font-size: 15px;">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" style="font-size: 15px;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $medicine_stocks->links() !!}
      
@endsection