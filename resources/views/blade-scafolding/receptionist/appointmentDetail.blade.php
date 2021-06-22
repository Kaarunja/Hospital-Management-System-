@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/rep2.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  #item div{
    margin-bottom: 20px;
  }
</style>
<div class="container">
    <div class="text-center" style="color: blue; font-weight: bold; font-size: 30px;">
        Appointment Details
    </div>
    <form type="post" action="{{url('/text')}}"> 
    
    <div class="serch-bar" class="text-left" style="margin-left: 17%; position: absolute; width: 250px;">
        <div id="custom-search-input" class="table-responsive">
            <div class="input-group col-md-12">
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>

                <input type="text" name="query" class="form-control input-lg" placeholder="NIC" >
            </div>
        </div>
    </div> <br>  
	<div id="item" style="color: black; margin-left: 20%; font-weight: bold; margin-top: 80px;">

    @if(isset($Appointments))
    @foreach( $Appointments as $Appointment )

        <div>
            Date:  {{   $Appointment->Date}}
        </div>
        <div>
            Period Time: {{$Appointment->Time}}
        </div>
        <div>
            Doctor: {{$Appointment->Doctor_Name}}
        </div>
        
        <div>
            Specialization: {{$Appointment->Specialization}}
        </div>
        <div>
            Appoinment No: {{$Appointment->Appointment_No}}
        </div>
    @endforeach
    @endif
    </div> 
</div>

@endsection