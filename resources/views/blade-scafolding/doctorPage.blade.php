
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/doc1.jpg');
    background-attachment: fixed;
    background-size: cover;
    z-index: -2;

  }
  @media(max-width: 550px){
  #docpage #patbt #login {
        font-size: 15px;
    }
  }
  @media(min-width: 550px){
  #docpage #patbt #login {
        font-size: 19px;
    }
  }
  @media(min-width: 991px){
    #image{
      align-content: center;
      margin-top: 100px;
    }
  }
  @media(max-width: 991px){
    #image{
      margin-top: 50px;
      margin-left: 5%;
    }
    #to{
      color: white;
    }
  }
  #to{
    margin-top: 30px;
    color: blue;
    margin-bottom: 20px;
    font-weight: bold;
  }
  @media(max-width: 1155px) and (min-width: 785px){
    #patbt{
      margin-left: 40%;
    }
  }
  @media (max-width: 785px){
    #patbt {
        margin-left: -13%;
    }
  }
</style>

<div id="docpage" class="container">
    <div id="patbutton" style="right: 10px;">
        <div id="patbt">
            <a><button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn">My Details</button></a>
            <a href="{{route('addPrscptn',$det->Doctor_ID)}}" style="position: absolute;"><button class="btn btn right">Prescription</button></a>
            <a id="login" href="/login" style="position: absolute; margin-left: 125px;"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
        </div>
    </div>
    <div class="col-md-6" style="align-content: center; top: 10%;">
        <div id="image" style="margin-left: 40%;">
            <h2>Profile Photo</h2>
            <img class="img" src="{{asset('upload/profile')}}/{{$det->Docim}}" height="120" width="130" alt="avatar" style=" cursor: pointer;">
            <input type="file" name="image" accept="image/*" id="file" style="display: none;">
            <p>
                <label data-toggle="modal" data-target="#exampleModalCenter2" style="cursor: pointer; color: blue;" >Upload Image</label>
            </p>
            <img id="output" width="200">
        </div>
     </div>

     <h2 id="to">Today Appointments:{{count($app)}}</h2>
     <div class="col-md-6">
        <div class="text-center"><h1>Working Period</h1></div>
        <div class="text-center">
            <div class="table-responsive" style="margin-top: 35px;">
                <table id="doctor_data" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th width="40%">Date</th>
                            <th width="40%">Time</th>

                        </tr>
                        </thead>
                        @if(count($periods)>0)
                   @foreach($periods as $pr)
                      <tr>

                        <td>{{$pr->Date}}</td>
                        <td>{{$pr->Time_Period}}</td>

                      </tr>
                      @endforeach
                      @else
                             <h3>No Appointments</h3>
                             @endif



                 </table>
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

              <form action="/docimage" method="POST" enctype="multipart/form-data">
                 @csrf
                 <input  type="hidden" name="id" class="form-control" value="{{$det->Doctor_ID}}"><br>
                 <img id="blah" alt="your image" style="width:150px;height:auto; margin: 0 0 3% 35%;"  /><br>

                <input class="form-control" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="image" style="padding-left: 8%;"><br>
                  <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: 8%;">Update</button>
              </form>
        </div>
      </div>
    </div>
    <!--End Moda2 -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">My Details</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="">
                    <label for="username" class="text-info">Name: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="email" class="form-control" value="{{$det->Doctor_Name}}">
                    </div>
                </div>
                <div class="">
                    <label for="username" class="text-info">Address:</label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="email" class="form-control" value="">
                    </div>
                </div>
                <div class="">
                    <label for="username" class="text-info">Specialization: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right" style="margin-left: -20px;">
                        <input type="email" class="form-control" value="{{$det->Specialization}}">
                    </div>
                </div>
                <div class="">
                    <label for="username" class="text-info">ID: </label>
                    <div class="col-md-10 col-sm-9 col-xs-12 right">
                        <input type="email" class="form-control" value="{{$det->Doctor_ID}}">
                    </div>
                </div>
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


</div>

@endsection

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

