
@extends('blade-scafolding.layout.content')

@section('content')

<!--login form-->
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/login.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
</style>
<div id="login" class="form" >
   <h3 class="text-center text-white pt-5" style="font-weight: bold;">Welcome Back!</h3>
        <div class="container">
        
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/log" method="post">
                        {{csrf_field()}}
                            <h3 class="text-center text-info">Login</h3>

                            <div id="msg" class="alert alert-danger" style="padding: 2px; margin-bottom: 0px; text-align: center; display: none;">
                                <strong>{{$messege}}</strong> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeTag()" style="padding: 4px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="id"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password"  class="form-control">
                            </div>

                            <div class="form-group" class="text-info">
                                <p class="forgot"><a href="/forget">Forgot Password?</a></p>
                                <a href="/regi" id="reg-link">Register here</a></p>
                                <button class="button button-right">Log In</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if($messege=="Wrong password or username")
<script>
var x = document.getElementById("msg");
    x.style.display = "block";
function closeTag(){
  x.style.display = "none";
}
</script>
 @endif 
 @if($msg = session()->get('msg'))

@if($msg=="Password reset successful")
<script type="text/javascript">

  swal("Success!", "Password reset successful.", "success");

</script>
 @endif 

@endif

@endsection 
      <!--end login form-->
     