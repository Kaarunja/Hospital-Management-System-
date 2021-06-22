
@extends('blade-scafolding.layout.content')

@section('content')

<!--login form-->
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/login.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  #inp input{
    height: 44px;
  }
  #inp{
    margin-bottom: 20px;
  }
</style>
<div id="login" class="form" >
        <div class="container">
        
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/forgetpsw" method="post">
                        {{csrf_field()}}
                            <div class="text-center">
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Forgot Password?</h2>
                                <p>You can reset your password here.</p>
                            </div>

                             <div id="inp" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                                <input name="id" id="Username" placeholder="User Name" class="form-control" type="" required="">
                            </div>
                            
                            <div id="inp" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                <input name="email" id="emailInput" placeholder="Email address" class="form-control" type="email" required="">
                            </div>

                            <div class="form-group" class="text-info">
                                <button class="button button-right">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


 @if($msg = session()->get('msg'))


<script type="text/javascript">

  swal("Warning!", "{{$msg}}", "error");

</script>


@endif


@endsection 
      <!--end login form-->
     