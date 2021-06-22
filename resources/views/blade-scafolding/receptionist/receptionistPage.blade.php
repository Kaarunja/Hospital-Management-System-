
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/rec.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  @media(max-width: 783px){
    #ct1{
        margin-left: 20%;
        left: 20%;
        margin-top: 10px;
    }
  }
</style>
<div id="recPage" class="container">
    <div id="patbutton" style="right: 1px;">
      <div id="recbt">
      <a id="chat" href="{{url('/repchat')}}" class="btn btn left">chat</a>
        <a id="chat" href="timetab" class="btn btn left">Time Table</a>
        <a id="chat" href="{{url('/appDet')}}" type="" class="btn btn left">Appointment Details</button>
        <a href="/login"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>

      </div>
    </div>

    <div class="text-center" style="padding-top: 80px;"><h1>Add Appointment</h1></div>

     @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form method="post" action="/rappointment">
          {{csrf_field()}}
        <div class="container" class="text-center">
          <div id="recAddhistory" class="text-center">
                <div class="">
                    <input type="Date" name="Date" required="required" placeholder="Date">
                </div>
                <div class="" style="margin-bottom: 10px;">
                    <select id="inputState" class="" name="Specialization" style="width: 50%; margin-left: 2.5%; height: 35px; color: black;">
                        <option selected>Specialization</option>
                                   <option> Physician</option>
                                    <option> Consultant</option>
                                    <option> Cardiologist</option>
                                    <option> Surgeon</option>
                                    <option> Endocrinologist</option>
                                    <option> Psychiatrist</option>
                                    <option> Paediatrician</option>
                                    <option> Rhuematologist</option>
                                    <option> Urologist</option>

                    </select>


                </div>

                <div class="">
                    <select id="inputState" class="" name="Time" style="width: 50%; margin-left: 2.5%; height: 35px; color: black;">
                        <option selected>Time</option>
                        <option> 8 AM to 10 AM</option>
                        <option> 10 AM to 12 PM</option>
                        <option> 1 PM to 3 PM</option>
                        <option> 3 PM to 5 PM</option>
                        <option> 5 PM to 7 PM</option>
                        <option> 7 PM to 9 PM</option>


                    </select>
                </div>
                <div class="">
                    <input type="text" name="NIC_No" required="required" placeholder="NIC No">
                </div>
                <div class="">
                    <select id="inputState" class=""  name="Doctor_Name" required="required" placeholder="Doctor Name" style="width: 50%; margin-left: 2.5%; height: 35px; color: black;">
                    <option selected> doctor</option>
                    @foreach($doctors as $doctor)
                    <option value ="{{$doctor->Doctor_Name}}"> {{$doctor->Doctor_Name}}  </option>
                    @endforeach
                </div>

                <div class="">
                    <input type="hidden" name="Appointment_No" required="required" placeholder="Appointment No">
                </div>

              </div>
          <div style="margin-left: 28%;">
            <button type="submit" class="btn btn-primary" style="margin: 15px 0 30px -20px;">Add Appointment</button>
          </div>
        </div>
    </div>
  </form>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


 @if($msg = session()->get('msg'))

@if($msg=="Appointment Added Successfully!")
<script type="text/javascript">

  swal("Success!", "Appointment Added Successfully!", "success");

</script>
 @endif

@endif




@endsection



<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

