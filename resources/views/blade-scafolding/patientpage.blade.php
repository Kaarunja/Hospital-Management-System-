
@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/pat3.png');
    background-attachment: fixed;
    background-size: cover;
  }
  @media(max-width: 670px){
        table{
            background-color: white;
        }
    }
    @media(min-width: 995px){
      #photo{
       position: absolute;
        margin-left: 35%;
      }
    }
    @media(max-width: 995px) and (min-width: 669px){
      #photo{
       position: relative;
       margin-left: 50%;
      }
    }
    @media(max-width: 669px){
      #photo{
       position: relative;
       margin-left: 30%;
      }
    }
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if($msg = session()->get('msg'))

@if($msg=="Appointment deleted successfully!")
<script type="text/javascript">

  swal("Success!", "Appointment deleted successfully!", "success");

</script>
 @endif

@endif
<div id="patbutton" class="right" style="margin-right: 12%; background-color: transparent;">
    <div id="patbt">
    <a href="{{route('patRecord',$det->Pat_id)}}"><button class="btn">My Records</button></a>
    <button class="btn" data-toggle="modal" data-target="#exampleModalCenter1">My Details</button>
    <a href="{{route('patchat',$det->Pat_id)}}"><button class="btn">Chat</button></a>
    <a href="/login"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
    </div>
</div>
<div id="home" class="form">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">
                <div id="home-column" class="col-md-6">

                  <div id="photo" style=" margin-top: 100px;">
                    <h2>Profile Photo</h2>
                    <img class="img" src="{{asset('upload/profile')}}/{{$det->patim}}" height="120" width="130" alt="avatar" style=" cursor: pointer;">
                    <input type="file" name="image" accept="image/*" id="file" style="display: none;" required="required">
                    <p>
                        <label  data-toggle="modal" data-target="#exampleModalCenter2" style="cursor: pointer;" >Upload Image</label>
                    </p>
                    <img id="output" width="200">
                 </div>

                    <div id="home-box" class="col-md-12">
                    <form id="home-form" class="form" method="post" style="margin-top: 10px;" action="/docsearch">
                        {{csrf_field()}}

                            <div class="form-group">
                                <label for="" class="text-info">Specialization:</label><br>
                                <select id="inputState"  name = "specialization" class="form-control" >
                                    <option selected>any</option>
                                    <option>physian </option>
                                    <option>surgereon </option>
                                </select>


                            </div>

                            <div class="form-group">
                                <label for="date" class="date-info">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            <div id="home-button">
                                <!-- <input type="submit" class="button" name=""> -->
                                <button class="btn btn-left" type="submit" >SEARCH</button>
                            </div>

                        </form>


                            <table class="table table-bordered" style="color: black;">
                                <thead>
                                    <tr>
                                        <th width="60%">Doctor name</th>
                                        <th width="20%">Date</th>
                                        <th width="20%">Time</th>
                                    </tr>

                                                  @if($p=session()->get('p'))
                                             <?php $period=$p; ?>
                                             @else
                                             <?php $period=$c; ?>
                                             @endif
                                             <tbody>
                                                  @if(count($period) > 0)
                                                  <?php $no = 0; ?>
                                                  @foreach($period as $pe)



                                    <tr>
                                        <td>{{$pe->Doctor_Name}}</td>
                                        <td>{{$pe->Date}}</td>
                                        <td>{{$pe->Time_Period}}</td>
                                        <td><a href="{{route('book',['id'=>$pe->Period_ID,'patid'=>$det->Pat_id])}}"class="book"><button class="btn print" >book </button></a></td>
                                    </tr>

                                                  @endforeach
                                                  @else
                                                  <tr>
                                                       <td colspan="7"><h3 style=" color:black;text-align: center;">No Time Periods Available</h3></td>
                                                  </tr>
                                                  @endif


                                </thead>
                            </table>

                    </div>
                </div>
            </div>
            <br>  <br>  <br>  <br>  <br>
            <div class="text-center">
              <h1 style="color: white;">Your Reservations</h1>
              <table class="table" style="color: black;">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Doctor Name</th>
                      <th>Time</th>
                      <th>Appointment No</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                     @if(count($co)>0)
                   @foreach($co as $pr)
                      <tr>
                        <td>{{$pr->Date}}</td>
                        <td>{{$pr->Doctor_Name}}</td>
                        <td>{{$pr->Time}}</td>
                        <td>{{$pr->Appointment_No}}</td>
                        <td><a class="book" href="{{route('bkdlt',$pr->Appointment_No)}}"><button class="btn print">Delete </button></a></td>
                      </tr>
                      @endforeach
                      @else
                             <h3>No Appointments</h3>
                             @endif
                    </tbody>
                  </thead>
            </table>
            </div>
            <!-- Modal -->
            <style>
                #exampleModalCenter1 input{
                    height: 40px;
                }
                #exampleModalCenter1 button{
                    margin-bottom: 10px; margin-left: 30px;
                }
            </style>
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">My Details</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <div class="modal-body">
              <form>
                <div class="form-group">
                    <label for="username" class="text-info">Name: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="text" class="form-control" value="{{$det->Pat_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="text-info">Address: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="text" class="form-control" value="{{$det->Pat_address}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="text-info">User ID: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="text" class="form-control" value="{{$det->Pat_id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nic" class="text-info">NIC no: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="text" class="form-control" value="{{$det->Pat_Nic}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Telephone number: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right" style="margin-top: -10px;">
                        <input type="text" class="form-control" value="{{$det->Pat_MobileNo}}">
                    </div>
                </div><br/>
                <div class="form-group">
                    <label for="gender" class="text-info">Gender: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="text" class="form-control" value="{{$det->Pat_Gender}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday" class="date-info">Date of Birth: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right" style="margin-top: -10px;">
                        <input type="date" class="form-control" value="{{$det->Pat_DateOfBirth}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="form_email">E-mail: </label>
                    c
                </div>
              </div>
              <div class="" style="10px;">
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </form>
        </div>
      </div>
    </div>



        </div>

</div>
                                                      <!--upload image Modal 2-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Image Upload & Preview</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

              <form action="/patimage" method="POST" enctype="multipart/form-data">
                 @csrf
                 <input  type="hidden" name="id" class="form-control" value="{{$det->Pat_id}}"><br>
                 <img id="blah" alt="your image" style="width:150px;height:auto; margin: 0 0 3% 35%;"  /><br>

                  <input class="form-control" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="image" style="padding-left: 8%;"><br>
                  <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: 8%;">Update</button>
              </form>
        </div>
      </div>
    </div>
    <!--End Moda2 -->
@endsection

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
