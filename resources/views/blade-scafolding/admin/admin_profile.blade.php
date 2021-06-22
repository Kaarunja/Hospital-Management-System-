@extends('blade-scafolding.layout.admin')

@section('content')

<!--search -->
    
  <div class="serch-bar" class="text-left" style="width: 250px; margin-right: 10%;">
        <div id="custom-search-input" class="table-responsive">
            <div class="input-group col-md-12">
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                    <i class="fa fa-search" aria-hidden="true" style="margin-top: 12px;"></i>
                    </button>
                </span>
                <input type="text" class="form-control input-lg" placeholder="User-ID" style="margin-left: 35px;"id="myInput" onkeyup="myFunction()"/>
            </div>
        </div>
    </div>
    
    <br>
    <!--End search -->

    <!--search table -->
    <div id="srch" class="text-center" style="width: 80%; margin-left: 10%; margin-top: 40px;">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
            @if(count($u) > 0)
                                                  
                                                  @foreach($u as $user)
                                               


                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>
                                        @if($user->roll=="doctor")
                                        @foreach($d as $do)
                                        @if($do->Doctor_ID==$user->id)
                                        {{$do->Doctor_Name}}
                                        @endif
                                        @endforeach
                                        @else
                                        @foreach($p as $pa)
                                        @if($pa->Pat_id==$user->id)
                                        {{$pa->Pat_name}}
                                        @endif
                                        @endforeach
                                        @endif
                                        </td>
                                        <td>{{$user->roll}}</td>
                                        <td></td>
                                    </tr>
                                   
                                                  @endforeach
                                                  @else
                                                  <tr>
                                                       <td colspan="7"><h3 style=" color:black;text-align: center;">No Users</h3></td>
                                                  </tr>
                                                  @endif
            </tbody>
        </table>
    </div>
    <!--search table -->
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
@endsection