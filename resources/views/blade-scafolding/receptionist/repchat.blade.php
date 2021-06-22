@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
	@media(max-width: 500px){
	  body {
	    background-image:url('<?php echo url('/'); ?>/images/chtbox/chat.jpg');
	    background-attachment: fixed;
	    background-size: cover;
		}
  	}
  	@media(min-width: 500px){
	  body {
	  	margin-top: 150px;
	    background-image:url('<?php echo url('/'); ?>/images/chtbox/chat.jpg');
	    background-attachment: fixed;
	    background-size: 100% 90%;
	    background-position: bottom; 
		}
  	}
  	@media(min-width: 800px){ 
  		body {background-size: 100% 85%;}
  	}
  	.nav li{
  		font-weight: bold;
  		text-decoration: underline;
  	}   
  	.nav li:hover{ background-color: lightblue;}
  	.navbar-default {
    	background-color: transparent;
    	border-color: transparent; 
	}
	@media(max-width: 1000px){
		.navbar-nav{margin-top: 50px; background-color: lightblue;}
		.navbar-nav li:hover{background-color: white;}
	}
	table{
		width: 90%;
		margin-left: 10%;
	}
	tr{border-bottom: 2px solid black;}
	.col-md-12{background-color: rgba(0, 0, 0, 0.12); color: black; min-height: 350px;}
	h1{color: white; margin-top: 10px; margin-bottom: 30px; font-weight: bold;}
	button{margin-bottom: 10px; border: 0px; border-radius: 5px;}
</style>

<div class="container" style="margin-top: -50px;">
<nav id="header-nav" class="navbar navbar-default">
    
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle='collapse' data-target="#collapsable-nav" aria-expand="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: white;"></span>
            <span class="icon-bar" style="background-color: white;"></span>
            <span class="icon-bar" style="background-color: white;"></span>
          </button>

        </div>

        <div class="text-center" id="collapsable-nav" class="collapse navbar-collapse">
          <ul id="nav-list" class="nav navbar-nav navbar-right">
            	{{--<li><a href="{{route('patpage',$p->Pat_id)}}" style="color: blue;">Profile</a></li>--}}
                <li><a href="/login" style="color: blue;">Logout</a></li>
          </ul>
        </div>
    </nav>
  </div>

<div class="container">

	<div class="col-md-6">
		<div class="col-md-12">
			<h1 class="text-center">Inbox</h1>
			<table>
				<thead>
					<tr>
						<th>Date & Time</th>
						<th>Pat_id</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
				@if(count($in) > 0)
                    @foreach($in as $inbox)
                             <tr>
                             <td>{{$inbox->created_at}}</td>
							 <td>{{$inbox->Pat_id}}</td>
                             <td>   <button onclick="document.getElementById('imsg').innerText='{{$inbox->msg}}';document.getElementById('reply').value='{{$inbox->reply}}';document.getElementById('replyid').value='{{$inbox->id}}';" class="btn" data-toggle="modal" data-target="#exampleModalCenter1">View</button>
							 @if($inbox->reply!="")
							 Replied
							 @else
							 Not Replied
							 @endif
							 
							 </td>
                                       
						
						</tr>
						@endforeach
						@else
						<tr>
							<td colspan="7"><h3 style=" color:black;text-align: center;">No messages</h3></td>
						</tr>
						@endif
				</tbody>
			</table>
		</div>
	</div>

	<div class="col-md-6">
		<div class="col-md-12">
			<h1 class="text-center" style="margin-bottom: 0px;">SentBox</h1>
			<button onclick="document.getElementById('patid').value='{{$p->Pat_id}}';" class="btn" data-toggle="modal" data-target="#exampleModalCenter3">Send A Message</button>
			<table>
				<thead>
					<tr>
						
						<th>Date & Time</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
				@if(count($send) > 0)
                    @foreach($send as $se)
                             <tr>
                             <td>{{$se->created_at}}</td>
                             <td>   <button onclick="document.getElementById('smsg').innerText='{{$se->msg}}';document.getElementById('feed').innerText='{{$se->reply}}';" class="btn" data-toggle="modal" data-target="#exampleModalCenter2">View</button></td>
                                       
						
						</tr>
						@endforeach
						@else
						<tr>
							<td colspan="7"><h3 style=" color:black;text-align: center;">No messages</h3></td>
						</tr>
						@endif
				</tbody>
			</table>
		</div>
	</div>

</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <div class="modal-body">
			<form method="POST" action="/repreply" >
			@csrf
                <div class="">
                    <label for="username" class="text-info">Message</label>
                    <p id="imsg"></p>
                </div><br>
                <div class="">
                    <label for="username" class="text-info">Reply</label>
                   <input id="reply" type="text" name="reply" placeholder="Reply here">
				   <input id="replyid" type="hidden" name="id" placeholder="Reply here">
                </div>
               
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Reply</button>
              </div>
			  </form>
        </div>
      </div>
    </div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <div class="modal-body">
			
			@csrf
                <div class="">
                    <label for="username" class="text-info">Message</label>
                    <p id="smsg"></p>
                </div><br>
                <div class="">
                    <label for="username" class="text-info">Feedback</label>
					<p id="feed"></p>
                </div>
               
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
			  
        </div>
      </div>
    </div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <div class="modal-body">
			<form method="GET" action="/repsend" >
			@csrf
                <div class="">
                   <input id="msg" type="text" name="msg" placeholder="Type message here....">
				   <input id="Pat_id" type="text" name="Pat_id" placeholder="Pat_id">
                </div>
               
                
              </div> 
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
			  </form>
        </div>
      </div>
    </div>
@endsection

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 