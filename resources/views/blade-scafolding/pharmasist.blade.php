@extends('blade-scafolding.layout.content')



@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/med1.jpg');
  }
  @media(max-width: 1120px){
    #patbt #stock button{
        margin-right: 150px;
    }
  }
 
</style>
<div id="docpage" class="container">
@if(Session::has('success'))
 <div class="alert alert-success">
     {{Session::get('success')}}
 </div>
 @endif
<form action="/store" method="post">
         {{csrf_field()}}
         <section>
    <div class="text-center">
        <h1>Life Care Pharmacy</h1>
    </div>
    <div id="patbutton" style="right: 1px;">
        <div id="patbt">
           
            <a id="" href="/medicine_stocks"><button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn right">stock</button></a>
            <a id="" href="/contact"><button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn right">Invoice</button></a>
            <a href="/login" style="position: absolute; right: 10px;"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
        </div>
    </div>
    <div id="pharm" class="text-right" style="position: absolute;">
   
   <label class="text-right">Date : <span id="datetime"></span></label>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
</div>
<div id="pharm" class="text-right" style="position:left absolute;">
   
       
   <label class="text-right"  >Patient Address: <input type="text" name="PatientAddress" id="PatientAddress"  >
    </label>
    </div>


    <div id="pharm" class="text-right" style="position: absolute;">
   
       
        <label class="text-right" >Patient ID: <input type="text" name="PatientID" id="PatientID"  >
         </label>
         </div>
        
        
      <div class="text-center" style="padding-top: 100px;"><h1></h1></div>
        <div class="container" class="text-center">
            <div class="table-responsive" style="margin-top: 10px;">
               <table id="phar_table" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                            <th></th>
                           <th width="20%">Medicine Name</th>
                           <th width="20%">Quantity</th>
                           <th width="20%">Unit_Price</th>
                           <th width="20%">Discount</th>
                            <th width="30%">Total</th>
                            <th width="20%"><a href="#" class="btn btn-sm btn-Success addRow"><i class="fa fa-plus">Add</a></th>
                       </tr>
                        </thead>
                        
				<tbody class="addMoreMedicine">
				<tr>
                    <td>1</td>
                    <td>
                       

                          <select name="Med_Name[]" id="Med_Name" class="form-control Med_Name" >
                                    <option value="">Select Item</option>
                                    $medicine_stocks=array("medicine_stocks");
                                @foreach ($medicine_stocks ?? '' as $medicine_stock)
                                      
                                      <option data-Unit_Price="{{$medicine_stock->Unit_Price}}"  value="{{$medicine_stock->Med_Name}}">{{$medicine_stock->Med_Name}}</option>
                           @endforeach
                          </select>
                    </td>
                    <td>
                          <input type="number" name="Quantity[]" id="Quantity" 
                          class="form-control Quantity">
                    </td>
                    <td>
                          <input type="number" name="Unit_Price[]" id="Unit_Price" 
                          class="form-control Unit_Price">
                    </td>
                    <td>
                          <input type="number" name="Discount[]" id="Discount" 
                          class="form-control Discount">
                    </td>
                    <td>
                          <input type="number"  name="Total[]" id="Total" 
                          class="form-control Total">
                    </td>
                    <td>
                   
                   <a href="#" class="btn btn-sm btn-danger rounded-circle"><i class="fa fa-times"></i></a>
                   </td>
                </tr>
						
					
				</tbody>
                <tfoot>
                <tr>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                            
                             <td><strong>Total Bill Amount:<b class="total">0.00</strong></b> </td>
                             <td><div class="btn-group"><button type="button" onclick="PrintReceipt('print')"class="btn btn-dark"><i class="fa fa-print">print</i></button>  </div>  </td>
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                         </tr>
                        
                     </tfoot>
                   
              </table>
                    <div class="modal">
                    <div id="print">
                        @include('reports.receipt')
                    </div>
                   </div>

             
                     <br>
                     <br>
            </div>
            </section>
     </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
                <div id="note">
                     <p>Thank you for your business should you have any enquiries concerning the bill,</p>
                     <p>Please Contact: 011-25 70 120</p>
                 </div>
                
        </div>
        </div>
        @endsection
        <script src="jquery.min.js"></script>
        <script src="printThis.js"></script>
        @section('script')
                <script>
                
                  $('.addRow').on('click',function(){
                      var medicine_stock=$('.Med_Name').html();
                      var numberofMedicine=($('.addMoreMedicine tr').length-0)+1;
                        var tr='<tr><td class="no"">' + numberofMedicine +'</td>' +
                        '<td><select class="form-control Med_Name" name="Med_Name[]">'+medicine_stock+
                        '</select></td>'+
                        '<td> <input type="number" name="Quantity[]" class="form-control Quantity"></td>'+
                        '<td> <input type="number" name="Unit_Price[]" class="form-control Unit_Price"></td>'+
                        '<td> <input type="number" name="Discount[]" class="form-control Discount"></td>'+
                        '<td> <input type="number" name="Total[]" class="form-control Total"></td>'+
                        '<td> <a href="#" class="btn btn-sm btn-danger delete"><i class="fa fa-times"></a></td>';
                        $('.addMoreMedicine').append(tr);
                  });
                  $('.addMoreMedicine').delegate('.delete','click',function(){
                      $(this).parent().parent().remove();
                  })
                  function TotalAmount(){
                      var total=0;
                      $('.Total').each(function(i,e){
                          var amount =$(this).val()-0;
                          total += amount;
                      });
                      $('.total').html(total);
                  }
                 
                 
                   $('.addMoreMedicine').delegate('.Med_Name','change',function(){
                      var tr=$(this).parent().parent();
                      var Unit_Price=tr.find('.Med_Name option:selected').attr('data-Unit_Price');
                      tr.find('.Unit_Price').val(Unit_Price);
                      var Quantity=tr.find('.Quantity').val()-0;
                      var Unit_Price=tr.find('.Unit_Price').val()-0;
                      var Discount=tr.find('.Discount').val()-0;
                      var Total=(Quantity*Unit_Price)-((Quantity*Unit_Price*Discount)/100);
                      tr.find('.Total').val(Total);
                      TotalAmount();
                   
                  });
                  $('.addMoreMedicine').delegate('.Quantity,.Discount','keyup',function(){
                    var tr=$(this).parent().parent();
                    var Quantity=tr.find('.Quantity').val()-0;
                      var Unit_Price=tr.find('.Unit_Price').val()-0;
                      var Discount=tr.find('.Discount').val()-0;
                      var Total=(Quantity*Unit_Price)-((Quantity*Unit_Price*Discount)/100);
                      tr.find('.Total').val(Total);
                      TotalAmount();
                  })
                  $('#Paid_Amount').keyup(function()
                  {
                       //alert(1)
                       var total=$('.total').html();
                      //  var Paid_Amount=total;
                      //  var tot=((paidAmount*10)-(total*10)%100);
                        $('#Paid_Amount').val(total);
                  })
                  //$('#print').click(function(){
                   //   $('.container').printThis();
                //  })
                  function PrintReceipt(el){
                        var data ='<input type="button" id="printpageButton class=" printpageButton" style="display: block; width: 100%; border:none; background-color:#008B8B; color:#fff; padding:14px 28px; font-size:16px; cursor:pointer; text-align:center" value="print Receipt" onclick="window.print()">';
                        data +=document.getElementById(el).innerHTML;
                        myReceipt=window.open("","mywin","left=150,top=130,width=400,height=400");
                        myReceipt.screnX=0;
                        myReceipt.screnY=0;
                        myReceipt.document.write(data);
                        myReceipt.document.title="Print Receipt";
                        myReceipt.focus();
                        setTimeout(() => {
                            myReceipt.close();
                        }, 8000);
                        
                  }
                </script>
@endsection       
   
        
    

    




<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

