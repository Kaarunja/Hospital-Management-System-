


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible "content="IF=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">



    <meta name="viewport" content="width=device-width, initial"

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/
css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
</script>
<style>
.div_border{
width:60%;
margin:0 auto;
border:1px solid #ccc;
}
.has-error
{
border-color:#cc0000;a
background-color:#ffff99;
}
</style>
</head>
<body>
<title>Contact Us Form</title>
<style type="text/css">
  body {
    background-color: ;
    background-size: cover;
    background-attachment: fixed;
    font-size: 15px;
  }
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/med1.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  @media (max-width: 767px){
    body{
        background-image: linear-gradient(red, yellow, green);
        }
   }
}
 
}

</style>

      <header>
         @include('blade-scafolding.partials.header')
      </header>
<br />
<br />
<br />

<div class="container" style="width:65%">
@if (count($errors) > 0)
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>
<br>

<div class="container div_border">

<form method="post" action="/send" enctype="multipart/form-data" >
@csrf
<h1 align="center">Message sent to Supplier</h1><br >
<div class="form-group">
<label>Supplier Name</label>
<input type="text" name="subj"  placeholder="subject">
</div>
<div class="form-group">
<label>Supplier Email</label>
<input type="email" name="email"  placeholder="Enter Supplier Email" >
</div>
<div class="card-body">
    <input type="file" name="file" accept=".xlsx">
</div> 
<div class="form-group">
<label>Message For Supplier</label>
<textarea name="message" class="form-control"  placeholder="Enter Message"></textarea>
</div>
<div class="form-group" align="center">
<input type="submit"   value="send " >
</div>
</form>
</div>
</body>
</html>