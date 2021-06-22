<!DOCTYPE html>
<html lang="en">
<head>


<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/doc1.jpg');
      background-size: cover;
  }

</style>
</head>
<body>
@extends('blade-scafolding.layout.content')

@section('content')
<div id="patHistory" class="container">
    <div class="right" id="history">
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn right">Patient History</button>
    </div>
    <div class="text-center" style="padding-top: 20px;"><h1>Add Prescription</h1></div>

    <form style="padding-left: 20%;" action="/savepres" method="post">
    {{csrf_field()}}
          <div id="patAddhistory" style="backdrop-filter: blur(5px);">
                <div class="">
                    <label for="userId" class="text-info">Patient-ID:</label><br>
                    <input type="text" name="id" required="required">
                </div>
                <div class="">
                    <label for="username" class="text-info">Patient Name:</label><br>
                    <input type="text" name="name">
                </div>
                <div class="">
                    <label for="date" class="date-info">Date:</label><br>
                    <input type="date" name="date">
                    <input type="hidden" name="docid" value="{{$c->Doctor_ID}}">
                </div>
                <div id="diagnostic">
                    <label for="" class="text-info">Diagnostic:</label><br>
                    <input type="text" name="diagnosis">
                </div>
                <div id="description">
                    <label for="description" class="text-info">Description:</label><br>
                    <textarea  name="desc" class="form-control" rows="4"></textarea>
                </div>
                <div id="description">
                    <label for="description" class="text-info">Medicine:</label><br>
                    <textarea  name="med" class="form-control" rows="4"></textarea>
                </div>
                <div id="patadd" style="margin: 10px 65px 10px 10%;">
                  <button type="submit" class="btn btn left" style="width: 100px;">Add</button>
                </div>
              </div>
            </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document"  style="width: 80%;">
        <div class="modal-content">
          <div id="search" class="modal-header" style=" height: 70px;">
            <div class="serch-bar" class="text-left" style="margin-left: 5%; position: absolute; width: 50%;">
                  <div id="custom-search-input" class="table-responsive" style="margin-top: 0; margin-bottom: 0;">
                     <div class="input-group col-md-12">
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                        <input type="text" class="form-control input-lg" placeholder="Patient-ID" id="myInput" onkeyup="myFunction()"/>
                     </div>
                  </div>
               </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div  class="modal-body">
          <div class="text-center">
          <div class="table-responsive">

<table id="myTable" class="table table-bordered table-striped">
  <thead>

    <tr>
      <th width="15%">Patient Id</th>
      <th width="15%">Doctor Id</th>

      <th width="20%">Diagnosis</th>
      <th width="20%">Description</th>
      <th width="20%">Medicine</th>
      <th width="10%">Date</th>
    </tr>

    <tbody>
    @if(count($pres)>0)
    @foreach($pres as $pr)
                                                  <tr>
                                                       <td>{{$pr->Pat_id}}</td>
                                                       <td>{{$pr->Doctor_ID}}</td>
                                                       <td>{{$pr->Diagnosis}}</td>
                                                       <td>{{$pr->Description}}</td>
                                                       <td>{{$pr->Med_Name}}</td>
                                                       <td>{{$pr->created_at}}</td>

                                                  </tr>
                                                  @endforeach

                             @else
                             <h3>There are no Prescriptions</h3>
                             @endif
    </tbody>

  </thead>
</table>

</div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


</div>
@if($msg = session()->get('msg'))

@if($msg=="Prescription added successfully")
<script type="text/javascript">

  swal("Success!", "The prescription was successfully added.", "success");

</script>
 @endif

@endif
@endsection


<!-- Popper JS -->

<!-- Bootstrap JS -->




 <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->

<!-- Bootstrap JS -->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>







<script src="{{ asset('js/jquery.js')}}"></script>
     <script src="{{ asset('js/bootstrap.min.js')}}"></script>
     <script src="{{ asset('js/popper.min.js')}}"></script>

     <script src="{{ asset('js/sweetalert.min.js')}}"></script>
     </body>
     </html>


     <script>
    function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
               td = tr[i].getElementsByTagName("td")[0];
               if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    } else {
                    tr[i].style.display = "none";
                    }
               }
          }
     }
</script>
