@extends('medicine_stocks.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Stock</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medicine_stocks.index') }}" style="font-size: 15px;"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('medicine_stocks.update',$medicine_stock->Med_No) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Med_No:</strong>
                    <input type="text" name="Med_No" value="{{ $medicine_stock->Med_No }}" class="form-control" placeholder="Med_No">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Med_Name:</strong>
                    <input type="text" name="Med_Name" value="{{ $medicine_stock->Med_Name }}" class="form-control" placeholder="Med_Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dosage:</strong>
                    <input type="text" name="Dosage" value="{{ $medicine_stock->Dosage }}" class="form-control" placeholder="Dosage">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Consumption_time:</strong>
                    <input type="text" name="Consumption_time" value="{{ $medicine_stock->Consumption_time }}" class="form-control" placeholder="Consumption_time">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unit_Price:</strong>
                    <input type="text" name="Unit_Price" value="{{ $medicine_stock->Unit_Price }}" class="form-control" placeholder="Unit_Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Exp_Date:</strong>
                    <input type="date" name="Exp_Date" value="{{ $medicine_stock->Exp_Date }}" class="form-control" placeholder="Exp_Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Manu_Date:</strong>
                    <input type="date" name="Manu_Date" value="{{ $medicine_stock->Manu_Date }}" class="form-control" placeholder="Manu_Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="text" name="Quantity" value="{{ $medicine_stock->Quantity }}" class="form-control" placeholder="Quantity">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary" style="font-size: 15px; margin-bottom: 20px;">Submit</button>
            </div>
        </div>
   
    </form>
@endsection