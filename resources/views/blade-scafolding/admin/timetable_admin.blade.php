@extends('blade-scafolding.layout.admin')

@section('content')

  <div style="margin-top:2%;" class="col-sm-1">
  <button id="add" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Add Time 
        </button>
        
<a href="/updatedate" type="button" class="btn btn-primary">
  update date
</a>

  </div>
    <br>

  <!--Time table-->
  <div style="margin-top: 50px;">
    <table class="table table-bordered" style="background-color: white; margin-top: 10px;">
          <thead>
            <tr>
              <th scope="col">Time Period</th>
              <th scope="col">Doctor ID</th>
              <th scope="col">Doctor Name</th>
              <th scope="col">Specialization</th>
              <th scope="col">Date</th>
              <th scope="col">Day</th>
            </tr>
          </thead>
          <tbody>
          @if(count($periods) > 0)
                                             
                @foreach($periods as $pe)
              


  <tr>
      <td>{{$pe->Time_Period}}</td>
      <td>{{$pe->Doctor_ID}}</td>
      <td>{{$pe->Doctor_Name}}</td>
      <td>{{$pe->Specialization}}</td>
      <td>{{$pe->Date}}</td>
      <td>{{$pe->day}}</td>
      
    

     
  </tr>
  
                @endforeach
                @else
                <tr>
                      <td colspan="7"><h3 style=" color:black;text-align: center;">No Time Periods Available</h3></td>
                </tr>
                @endif
          </tbody>
      </table>
  </div>
    <!--End Time table-->

    <!-- Modal add -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">Add New Doctor Time</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <form>
              <div id="line" class="form-group col-md-6">
                <input type="" name="D_id" onchange="" placeholder="Doctor ID">
              </div>
              <div class="form-group col-md-6">
                  <input type="text" name="D_name" id="" value="" placeholder="Doctor Name" readonly="" style="background-color: #d4e9fd;"><br>
              </div>
              <div id="line" class="form-group col-md-6">
                      <select placeholder="Specalization">
                          <option  value="none" selected="" disabled="" hidden="">Specalization</option>
                          <option> </option>
                          <option> </option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <select id="" name="">
                          <option  value="none" selected="" disabled="" hidden="">Date</option>
                          <option> Monday</option>
                          <option> </option>
                      </select>
                  </div>
                  <div id="line" class="form-group col-md-6">
                      <select id="" name="">
                          <option  value="none" selected="" disabled="" hidden="">Time Period</option>
                          <option> </option>
                          <option> </option>
                      </select>
                  </div>
    
            </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </div>
            </div>
            <!--End model-->
                                      <!-- Modal add -->
    <div class="modal" id="myModal" style="margin-top: 70px;">
        <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New Doctor Time</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <form method="post" action="addtt">
                  <div class="modal-body">
                  
                  @csrf

                      <div id="line" class="form-group col-md-6">
                        <input type="" name="D_id" onchange="" placeholder="Doctor ID">
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" name="name" id="" value="" placeholder="Doctor Name"  style="background-color: #d4e9fd;"><br>
                      </div>
                      <div id="line" class="form-group col-md-6">
                          <select placeholder="Specalization" name="spe">
                              <option  value="none" selected="" disabled="" hidden="">Specalization</option>
                              <option value="Physian">Physian </option>
                              <option value="Consultant">Consultant </option>
                          </select>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="date" placeholder="Date" name="date">  
                      </div>
                      <div id="line" class="form-group col-md-6">
                          <select id="" name="timeperiod">
                              <option  value="none" selected="" disabled="" hidden="">Time Period</option>
                              <option value="8-10">8-10</option>
                              <option value="10-12">10-12 </option>
                              <option value="1-3">1-3 </option>
                              <option value="3-5">3-5 </option>
                              <option value="5-7">5-7 </option>
                              <option value="7-9">7-9 </option>
                          </select>
                      </div>
                      <div id="line" class="form-group col-md-6">
                          <select id="" name="day">
                              <option  value="none" selected="" disabled="" hidden="">Select a Day</option>
                              <option value="Monday">Monday </option>
                              <option value="Tuesday"> Tuesday</option>
                              <option value="Wednesday"> Wednesday</option>
                              <option value="Thursday"> Thursday</option>
                              <option value="Friday"> Friday</option>
                              <option value="Saturday"> Saturday</option>
                              <option value="Sunday"> Sunday</option>
                          </select>
                      </div>
                  </div>
              
              <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
              </form>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if($msg = session()->get('msg'))

@if($msg=="Doctor Added Successfully!")
<script type="text/javascript">

  swal("Success!", "Doctor Added Successfully!", "success");

</script>
 @endif 

@endif
    <!--- End model---->








                  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>              
    

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 

@endsection