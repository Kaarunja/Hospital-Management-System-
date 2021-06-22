
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/patHistory.jpg');
    background-attachment: fixed;
    background-size: cover;
  }

</style>
<div id="patHistory" class="container" style="height: 480px;">

    <div class="text-center" style="padding-top: 20px;"><h1>My Records</h1></div>
    
    <div class="container" class="text-center">
            <div class="table-responsive" style="margin-top: 10px;">
                <table id="doctor_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th width="10%">Doctor Id</th>
                            <th width="10%">Date</th>
                            <th width="25%">Diagnosia</th>
                            <th width="30%">Description</th>
                        </tr>
                        @if($p=session()->get('p'))
                                             <?php $record=$p; ?>
                                             @else
                                             <?php $record=$rec; ?>
                                             @endif
                                             <tbody>
                                                  @if(count($record) > 0)
                                                
                                                  @foreach($record as $re)
                                               


                                    <tr>
                                        <td>{{$re->Doctor_ID}}</td>
                                        <td>{{$re->created_at}}</td>
                                        <td>{{$re->Diagnosis}}</td>
                                        <td>{{$re->Description}}</td>
                                      
                                    </tr>
                                   
                                                  @endforeach
                                                  @else
                                                  <tr>
                                                       <td colspan="7"><h3 style=" color:black;text-align: center;">No Time Periods Available</h3></td>
                                                  </tr>
                                                  @endif
                    </thead>
                 </table>
            </div>
        </div>
</div>
    
</div>

@endsection
