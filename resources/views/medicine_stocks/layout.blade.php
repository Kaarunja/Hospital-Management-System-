
<!DOCTYPE html>
<html>
<head>
@include('blade-scafolding.partials.head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="clinic_version">
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/med1.jpg');
    background-size: cover;
    background-attachment: fixed;
    font-size: 15px;
  }

</style>

      <header>
         @include('blade-scafolding.partials.header')
      </header>
<div style="margin-top: 150px;">
<div class="text-center">
  <h1>Medicine Stock Details</h1>
</div>
  
<div class="container">
    @yield('content')
</div>
</div>

</body>
</html>