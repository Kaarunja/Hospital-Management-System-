@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/rep4.webp');
    background-attachment: fixed;
    background-size: cover;
}
form label{
    color: black;
}

</style>

<div id="myDIV" id="homeregist" class="container" class="text-center">
    <div style="margin-top: 20px;">
        <h2 style="backdrop-filter: blur(5px); color: white;">Already a member? <a onclick="login()" href="#" style="color: #0040FF;">Login</a> </h2>
    </div>
    <hr>
    <form method="post" action="/hmreg">
        {{csrf_field()}}
        <h2 class="text-center text-info" style="font-weight: bold; color: white;">Patient Registration</h2>
        <input type="hidden" name="bid" id="PatName" value="{{$bid}}" class="form-control">
            <div class="form-group" id="form">
                <label for="username">Patient Name:</label><br>
                <input type="text" name="name" id="PatName" class="form-control">
            </div>
            <div class="form-group" id="form">
                <label for="username">Patient Id:</label><br>
                <h3 style="font-size: 30px; color: white; margin-top: 10px; margin-left: 50px;"> {{$id}} </h3>
            </div>
            <div class="form-group" id="form">
                <label for="nic">NIC no:</label><br>
                <input type="text" name="nic" id="nic" class="form-control">
            </div>
            <div class="form-group" id="form">
                <label for="address" class="control-label">Address:</label><br>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group" id="form">
                <label for="phone">Telephone number:</label><br>
                <input type="tel" name="phone" id="phone" class="form-control">
            </div>

            <div class="form-group" id="form">
                <label for="sex">Gender:</label><br>
                <select id="inputState" class="form-control" name="gender" placeholder="Gender">
                    <option selected></option>
                    <option> Male</option>
                    <option> Female</option>
                </select>
            </div>

            <div class="form-group" id="form">
                <label for="birthday">Date of Birth:</label><br>
                <input type="date" name="birthday" id="birthday" class="form-control">
            </div>
            <div class="form-group" id="form">
                <label for="form_email">E-mail:</label><br>
                <input type="email" name="email" id="form_email" class="form-control" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group" id="form">
                <label for="psw">Password</label>
                <input type="password" class="form-control"name="psw" required> 
            </div>   
            <div class="form-group" id="form">
                <label for="psw-repeat">Repeat Password</label>
                <input type="password" class="form-control"name="rpsw" required>
            </div>
            <div id="msg1" class="form-group" style="color: #ab001c; display: none;">
                <img src="<?php echo url('/'); ?>/images/error.png">
                {{$msg}}
            </div>
            <div class="form-group" id="note">
                <P  style="color: white;">* If you co-operate with us again, you can directly login by using your user name and password</P>
            </div>
            <div class="divider"></div>
            <div class="text-center">
                <label class="text-info" style="width: 100%; color: black;">Emergency Contact</label>
            </div>

            <div class="form-group" id="form">
                <input type="text" name="pname" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group" id="form">
                <input type="text" name="relation" id="relation" class="form-control" placeholder="Relationship">
            </div>
            <div class="form-group" id="form">
                <input type="tel" name="pphone" id="phone" class="form-control" placeholder="Telephone number">
            </div>

            <div class="form-group">
                <button value="Register" type="submit" class="button button-block"/>Register</button>
            </div>
    </form>
                
</div>
<!--end Register Form-->

<!--Login page-->
            <div id="myDIV2" style="display: none; margin-top: 40px;">
                 <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="/" method="post" style="margin-left: 35%; margin-top: 10px; width: 100%;">
                                    {{csrf_field()}}
                                    <h2 class="text-center text-info" style="color: white; font-weight: bold;">Login</h2>
                                    <div id="msg" class="alert alert-danger" style="padding: 2px; margin-bottom: 0px; text-align: center; display: none;">
                                        <strong>{{$msg}}</strong> 
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeTag()" style="padding: 4px;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="form-group" id="labl1">
                                        <label for="username">Username:</label><br>
                                        <input type="text" name="id" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>

                                    <div class="form-group" class="text-info">
                                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                                        <a onclick="login()" href="#" id="reg-link" style="color: blue;">Register here</a></p>
                                        <button class="button button-right"/>Log In</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Login page-->

@if($msg=="Those passwords didn't match. Try again.")
<script>
var x = document.getElementById("msg1");
    x.style.display = "block";
</script>
 @endif 

@if($msg=="Wrong password or username")
<script>
var x = document.getElementById("msg");
var y = document.getElementById("myDIV2");
var z = document.getElementById("myDIV");
    x.style.display = "block";
    y.style.display = "block";
    z.style.display = "none";
function closeTag(){
  x.style.display = "none";
}
</script>
 @endif 
 @endsection

 <script>

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

</script>