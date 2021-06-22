@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/rep4.jpg');
    background-attachment: fixed;
    background-size: cover;
}

.rounded-lg {
  border-radius: 1rem;
}

.navbar-nav .nav-link {
  color: #555;
}

.navbar-nav .nav-link.active {
  color: #fff;
}
#collapsable-nav{
  text-align: center;
}
#collapsable-nav ul li{
  display:inline;
}
td{
  color: black;
}
@media(min-width: 1172px){
  #collapsable-nav ul{
    padding: 0 20%;
  }
}
@media(max-width: 1172px){
  #collapsable-nav ul{
    padding: 0 13%;
  }
}
#srch tr{
  border-bottom-style: solid;
}
#srch th{
  text-align: center;
}
#srch td{
  color: #C9FFE5;
}
#srch {
  color: white;
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>

<div class="container">

    <!--search by docid or Specialization-->
    <div class="serch-bar" class="text-left" style="position: absolute; width: 250px;">
        <div id="custom-search-input" class="table-responsive">
            <div class="input-group col-md-12">
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button" style="margin-top: 15px;">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="text" class="form-control input-lg" placeholder="Doctor Name" style="padding: 0 0 0 0;" />
            </div>
        </div>
    </div>
    <div style="position: absolute; margin-left: 300px; margin-top: 10px;">
            <select style="width: 200px; height: 42px; border-radius: 20px; background-color: white; padding-left: 15px;">
                <option selected> Specialization</option>
                <option>Consultant</option>
                <option>Cardiologist</option>
            </select>
    </div>
    <div class="" style="position: absolute; margin-left: 550px; margin-top: 10px";
    >
                    <input type="Date" name="Date" required="required" placeholder="Date" style="width: 200px; height: 42px; border-radius: 20px; background-color: white; padding-left: 15px";>
                </div>

    <div id="srch" style="margin-top: 50px;" class="text-center">
        <table class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Period Time</th>
                    <th>Doctor Name</th>
                    <th>No of Patients</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--search by docid-->

    <!--Time table-->
    <div class="text-center" style="color: blue; font-weight: bold; font-size: 27px; margin-top: 40px;">

    </div>

    <div>
        <button type="button" class="navbar-toggle collapsed" data-toggle='collapse' data-target="#collapsable-nav" aria-expand="false" style="color: black; border: 3px solid;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: black;"></span>
            <span class="icon-bar" style="background-color: black;"></span>
            <span class="icon-bar" style="background-color: black;"></span>
        </button>
    </div>
    <div id="collapsable-nav" class="navbar-collapse collapse" class="header-info">
        <ul class="nav navbar-nav" style="border-radius: 20px; background-color: #3355FF; width: 100%;">
            <li><a href="#">Monday</a></li>
            <li><a href="#">Tuesday</a></li>
            <li><a href="#">Wednesday</a></li>
            <li><a href="#">Thursday</a></li>
            <li><a href="#">Friday</a></li>
            <li><a href="#">Saturday</a></li>
            <li><a href="#">Sunday</a></li>
        </ul>
    </div>

    <table class="table table-bordered" style="background-color: white; margin-top: 10px;">
        <thead>
          <tr>
            <th scope="col">Period Time</th>
            <th scope="col">Doctor ID</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Specialization</th>
            <th scope="col">No of Patients</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    <!--End Time table-->

</div>

@endsection
