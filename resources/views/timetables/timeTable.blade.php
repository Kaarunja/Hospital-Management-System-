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
  margin-top: 50px;
}
#search1{
	position: absolute;
	margin-left: 280px;
	margin-top: 10px;
}
#search{
	position: absolute;
	margin-left: 510px;
  margin-top: 10px;
}
#inp{
	width: 200px;
	height: 42px;
	border-radius: 20px;
	background-color: white;
	padding-left: 15px;
}
#searchbtn{
	position: absolute;
	margin-left: 750px;
	margin-top: 18px;
	width: 100px;
	background-color: lightblue;
	color: black;
}
@media(max-width: 780px){
	#search1{
		margin-top: 60px;
		margin-left: 0;
	}
	#search{
		margin-top: 100px;
		margin-left: 0;
	}
	#inp{
		width: 250px;
	}
	#srch{
		margin-top: 150px;
	}
	#searchbtn{
		margin-top: 118px;
		margin-left: 270px;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>

<div class="container">
    <div class="text-center" id="collapsable-nav" class="collapse navbar-collapse">
        <ul id="nav-list" class="nav navbar-nav navbar-right" style="margin: 0 -15% 0 10px;">
            <li style="text-decoration: underline; font-weight: bold;"><a href="/recPage" style="color: black; font-size: 20px;">Back</a></li>
        </ul>
    </div>

<div class = "col-md-12">
<form action="/searchtab" method="get">
<div class = "input-group">
<input type ="search" name="search" class ="form-control" placeholder="Details">




<span class ="input-group-prepend">
<button type="submit" class="btn btn-primary" style="margin-top: 15px;">Search</button>
</span>

</div>

</form>

</div>












    <!--Time table-->
    <div class="text-center" style="color: blue; font-weight: bold; font-size: 27px; margin-top: 40px;">
        Time Table
    </div>

    <table class="table table-bordered" style="background-color: white; margin-top: 10px;">
        <thead>
          <tr>
          	<th scope="col">Day</th>
            <th scope="col">Time Period</th>
            <th scope="col">Doctor ID</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Specialization</th>
            <th scope="col">No of Patients</th>
          </tr>
        </thead>
        @foreach($timetables as $timetable)
        <tr>


            <td>{{$timetable ->day}} </td>
            <td>{{$timetable ->Time_Period}}</td>
            <td>{{$timetable ->Doctor_ID}}</td>
            <td>{{$timetable ->Doctor_Name}}</td>
            <td>{{$timetable ->Specialization}}</td>
            <td>{{$timetable ->No_of_Patients}}</td>

        </tr>
        @endforeach
      </table>
    <!--End Time table-->

</div>

@endsection








