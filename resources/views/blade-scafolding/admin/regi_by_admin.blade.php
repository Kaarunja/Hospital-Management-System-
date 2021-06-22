@extends('blade-scafolding.layout.admin')

@section('content')
<style type="text/css">
	@media(min-width: 450px){
		input, select{
			width: 40%;
		}
	}
	@media(min-width: 870px){
		.col-md-6{
			width: 40%;
		}
		#line{
			margin-left: 10%;
		}
	}
	.form-group input, .form-group select{
		font-size: 18px;
	}
	@media(min-width: 770px){
		#alert{width: 60%; margin-left: 20%;}
	}
	@media(max-width: 770px){
		#alert{width: 90%; margin-left: 5%;}
	}
</style>

<div class="container">

	<h1 style="text-align: center; font-weight: bold;">Registration</h1>
	<form action="/others_reg" method="post">
		{{csrf_field()}}
		<div id="line" class="form-group col-md-6">
			<select placeholder="" name="roll" id="roll" onchange="selectID()">
				<option value="none" selected="" disabled="" hidden="">Role</option>
                <option value="doc">Doctor</option>
                <option value="pham">Pharmacist</option>
                <option value="rece">Receptionist</option>
            </select>
		</div>
		<div style="display: none;" id="spcl" class="form-group col-md-6">
            <select id="svalue" name="specalization" onchange="showid()">
            	<option  value="none" selected="" disabled="" hidden="">Specalization</option>
                <option >Physian</option>
				<option >Consultant</option>
                <option >Surgeon</option>
				<option >Psychiatrits</option>
				<option >Urologist</option>
				<option >Cardologist</option>
				<option >Paediatrician</option>
				<option >Endocrinologist</option>
				<option >Rhuematologist</option>
                <option> </option>
            </select>
        </div>
        <div id="lb" style="display: none;"><div id="line" class="form-group col-md-6" style="color: black; font-size: 18px; text-align: right; margin-top: 13px;">
        	Doctor ID <i class='fas fa-arrow-right'></i>
        </div></div>
		<div class="form-group col-md-6">
            <input type="hidden" id="doc" value="{{$no_doc}}">
            <input type="hidden" id="pha" value="{{$no_pha}}">
            <input type="hidden" id="rec" value="{{$no_rec}}">
            <input class="form-control" type="text" name="userid" id="userid" placeholder="User ID" readonly style="background-color: #d4e9fd;"><br>
        </div>
        <div id="line" class="form-group col-md-6">
			<input type="" name="name" placeholder="Name">
		</div>
		<div class="form-group col-md-6">
			<input type="" name="email" placeholder="Email">
		</div>
		<div id="line" class="form-group col-md-6">
			<input type="" name="phone_no" placeholder="Phone No">
		</div>
		<div class="form-group col-md-6">
			<input type="password" name="password" placeholder="Password">
		</div>

		<div>
		@foreach($errors->all() as $error)
			<div id="alert" class="alert alert-danger form-group text-center" role="alert" style="margin-bottom: 0px; border-radius: 0;">
				{{$error}}
			</div>
		@endforeach
		</div>

		<div class="form-group col-md-12">
			<button type="submit" class="btn right" style="font-size: 16px; margin-right: 10%;">register</button>
		</div>
		
	</form>

</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	function showid(){
		var spcl_Name = document.getElementById('svalue');
		var strUser = spcl_Name.options[spcl_Name.selectedIndex].text;
		if (strUser != "none") {
			var count = document.getElementById('doc').value;
            document.getElementById('userid').value = "D"+strUser.substring(0, 3)+count;
        }
    }

	function selectID(){
		var roll = document.getElementById('roll').value;
		var x = document.getElementById('spcl');
		var y = document.getElementById('lb');
		if (roll=="doc") {
			x.style.display = "block";
			y.style.display = "block";
		}
		else if (roll=="pham") {
			var count = document.getElementById('pha').value;
            document.getElementById('userid').value = "Ph"+count;
            x.style.display = "none";
			y.style.display = "none";
		}
		else if (roll=="rece") {
			var count = document.getElementById('rec').value;
            document.getElementById('userid').value = "Rec"+count;
            x.style.display = "none";
			y.style.display = "none";
		}
		else{
			x.style.display = "none";
			y.style.display = "none";
		}
	}
</script>

@if($msg=="Registration was successful and the password was emailed")
<script type="text/javascript">

  swal("Success!", "{{$msg}}", "success");

</script>
@elseif($msg=="Registration not completed")
<script type="text/javascript">

  swal("Warning!", "{{$msg}}", "warning");

</script>
@endelseif
 @endif

@endsection
<script src='https://kit.fontawesome.com/a076d05399.js'></script>