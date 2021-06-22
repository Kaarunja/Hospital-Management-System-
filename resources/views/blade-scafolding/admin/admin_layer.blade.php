
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/admin.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  #out{
    height: 50px;
    width: 120px;
    background-color: transparent;
    border: 1px solid silver;
    border-radius: 20px; 
  }
  #out button{
    height: 50px;
    width: 120px;
    background-color: transparent;
    color: #f8b739;
    border-radius: 20px; 
    border: none;
  }
  #out button:hover {
    background-color: #CCD4FF;
    color: black;
    font-size: 20px;
  } 
  @media(min-width: 767px) and (max-width: 1002px){
    #out{
      margin-left: 40%;
    }
  }
  #logo {
    background-color: white;
    border: 3px solid blue;
  }
</style>

		
      <!-------------sidebar-------------------->
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a id="logo" href="/" class="img logo rounded-circle mb-5" style="background-image: url(images/new.png);"></a>
	        <ul class="list-unstyled components mb-5">
            
            <li class="active">
                <a href="admin">Profile</a>
            </li>

            <li>
                <a href="/adm_regi">Register</a>
            </li>
	          <!-- <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Register</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu" style="text-align: center;">
                <li>
                    <a href="/docregi">Doctor</a>
                </li>
                <li>
                    <a href="/pharegi">Pharmacist</a>
                </li>
                <li>
                    <a href="/pharegi">Receptionist</a>
                </li>
	            </ul>
	          </li> -->

	          <li>
	              <a href="/ttable_admin">TimeTable</a>
	          </li>

	        </ul>

	      </div>
    	</nav>
      <!-------------END sidebar-------------------->

        <!-- Page Content header -->
      <div id="content" class="p-4 p-md-5">
        <div class="header-top wow fadeIn">
          <!-------------------header------------------->
            <div class="container">
                <a class="navbar-brand" href="/"><img src="<?php echo url('/'); ?>/images/logo1.png" alt="image"></a>
                <div id="out" class="right">
                    <button><span class="glyphicon glyphicon-log-out" style="color: #31708f;"></span> Log-out</button>
                    
                </div>
            </div>
          <!-------------------header------------------->

        <!----------end button---------->
        
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            
          </div>
        
        <!----------end button---------->

        <br>
        <div>
         @yield('content')
         </div>


    <!--END Page Content header -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

     