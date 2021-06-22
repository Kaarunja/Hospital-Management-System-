@extends('medicine_stocks.layout')

  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Stock</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('medicine_stocks.index') }}" style="font-size: 15px;"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('medicine_stocks.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Med_No:</strong>
                <input type="text" name="Med_No" class="form-control" placeholder="Med_No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Med_Name:</strong>
                <input type="text" name="Med_Name" class="form-control" placeholder="Med_Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dosage:</strong>
                <input type="text" name="Dosage" class="form-control" placeholder="Dosage">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Consumption_time:</strong>
                <input type="text" name="Consumption_time" class="form-control" placeholder="Consumption_time">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Unit_Price:</strong>
                <input type="text" name="Unit_Price" class="form-control" placeholder="Unit_Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Exp_Date:</strong>
                <input type="date" name="Exp_Date" class="form-control" placeholder="Exp_Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manu_Date:</strong>
                <input type="date" name="Manu_Date" class="form-control" placeholder="Manu_Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="text" name="Quantity" class="form-control" placeholder="Quantity">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>AlertStock:</strong>
                <input type="number" name="AlertStock" class="form-control" placeholder="AlertStock">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="font-size: 15px; margin-bottom: 15px;">Submit</button>
        </div>
    </div>
   
</form>
@endsection