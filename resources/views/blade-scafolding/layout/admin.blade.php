<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      @include('blade-scafolding.partials.head')
      <link rel="stylesheet" href="<?php echo url('/'); ?>/css/admin.css">
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="<?php echo url('/'); ?>/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->

      <div class="wrapper d-flex align-items-stretch">
      @include('blade-scafolding.admin.admin_layer')
      </div>

      <!-- end copyrights -->

      @include('blade-scafolding.partials.script')
      <script src="<?php echo url('/'); ?>/js/admin.js"></script>
      
   </body>
</html>
