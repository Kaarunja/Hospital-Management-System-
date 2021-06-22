
@extends('blade-scafolding.layout.content')

@section('content')

<!--register form-->
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/regi.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  @media (max-width: 767px){
    body{
        background-image: linear-gradient(red, yellow, green);
        }
   }
}
</style>
<div id="reg" class="form" >

        <div class="container" class="text-center">
        <h2 style="text-align: right;">Already a member? <a href="/login" style="color: #0040FF;">Login</a> </h2>
            <div id="reg-row" class="row justify-content-center align-items-center">
                <div id="reg-column" class="col-md-6">
                    <div id="reg-box" class="col-md-12">
                        <form id="reg-form" class="form" action="/register" method="post">
                        {{csrf_field()}}
                            <h2 class="text-center text-info" style="font-weight: bold; color: white;">Patient Registration</h2>
                            <div style=" margin-top: 10px; position: relative;">
                                <h2>Profile Photo</h2>
                                <img class="img" src="<?php echo url('/'); ?>/images/profile-photo/patphoto.png" height="120" width="130" alt="avatar" style=" cursor: pointer;">
                                <input type="file" name="image" accept="image/*" id="file" style="display: none;">
                                <p>
                                    <label for="file" style="cursor: pointer;" >Upload Image</label>
                                </p>
                                <img id="output" width="200">
                            </div>
                            <div class="form-group">

                                <label for="username" class="text-info">Patient Id:</label><br>

                             <h3> {{$id}} </h3>

                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Patient Name:</label><br>
                                <input type="text" name="name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address" class="control-label">Address:</label><br>
                                <input type="text" name="address"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nic" class="text-info">NIC no:</label><br>
                                <input type="text" name="nic" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telephone number:</label><br>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sex" class="text-info">Gender:</label><br>
                                <select id="inputState" class="form-control" name="gender">
                                    <option selected></option>
                                    <option> Male</option>
                                    <option> Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthday" class="date-info">Date of Birth:</label><br>
                                <input type="date" name="birthday"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="form_email">E-mail:</label><br>
                                <input type="email" name="email"  class="form-control" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label for="psw">Password</label>
                                <input type="password" class="form-control"name="psw" required>
                            </div>
                            <div class="form-group">
                                <label for="psw-repeat">Repeat Password</label>
                                <input type="password" class="form-control"name="rpsw" required>
                            </div>
                            <div id="msg1" style="color: #ab001c; display: none;">
                                <img src="<?php echo url('/'); ?>/images/error.png">
                                {{$msg}}
                            </div>
                            <div id="note" style="color: black;">
                                * If you co-operate with us again, you can directly login by using your user name and password
                            </div>

                            <div class="divider"></div>
                            <label id="subtopic" class="text-center text-info">Emergency Contact</label>

                            <div class="form-group">
                                <label class="text-info">Name:</label><br>
                                <input type="text" name="pname" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">Relationship:</label><br>
                                <input type="text" name="relation" id="relation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telephone number:</label><br>
                                <input type="tel" name="pphone" id="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <input value="Register" type="submit" class="button button-block" style="height: 35px;width: 100px; color: white; background: linear-gradient(to right, #1d86df 0%, #39b49a 100%); border-radius: 20px;"/>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@if($msg=="Those passwords didn't match. Try again.")
<script>
var x = document.getElementById("msg1");
    x.style.display = "block";
</script>
 @endif

@if($msg=="Registered successfully.")
    <script>
            swal("Congrats!", ", Your account is created!", "success");
    </script>
@endif

@endsection
      <!--end login form-->
