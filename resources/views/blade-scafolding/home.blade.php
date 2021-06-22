@extends('blade-scafolding.layout.master')

@section('content1')
<style type="text/css">
    @media(max-width: 670px){
        table{
            background-color: white;
        }
    }
</style>
<div id="home" class="form" style="background-image:url('<?php echo url('/'); ?>/images/hos2.jpg'); background-attachment: fixed; background-size: cover; min-height: 630px;">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">

                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" method="post" style="margin-top: 100px;" action="/docsearch">
                        {{csrf_field()}}

                            <div class="form-group">
                                <label for="" class="text-info">Specialization:</label><br>
                                <select id="inputState"  name = "specialization" class="form-control">
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
                            <div class="scrollbar scrollbar-lady-lips" style="height: 180px; width: 100%;">
                            <div class="force-overflow" style="min-height: 180px;">
                           
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
            
                                        <td><a href="{{route('booking',$pe->Period_ID)}}"class="book"><button class="btn print" >book </button></a></td>
                                    </tr>
                                   
                                                  @endforeach
                                                  @else
                                                  <tr>
                                                       <td colspan="7"><h3 style=" color:black;text-align: center;">No Time Periods Available</h3></td>
                                                  </tr>
                                                  @endif

                                </thead>
                            </table></div></div>
                    </div>
                </div>

            </div>
            
    
 

        </div>
</div>

@endsection  
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function login() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
  } else {
    y.style.display = "none";
    x.style.display = "block";
  }
}
function loginclose(){
    var y = document.getElementById("myDIV2");
    y.style.display = "none";
}

</script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 
