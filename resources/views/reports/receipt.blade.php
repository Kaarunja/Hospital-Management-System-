<div id="invoice">
    <div id="printed_content"  >
        <center id="top">
                <div class="logo"></div>
                <div class="info"></div>
                <h2>Life Care Hospial</h2>

        </center>

</div> 
<div class="mid">
<div class="info">
<div id="pharm" class="text-right" style="position: absolute;">
   
   <label class="text-right">Date : <span id="datetime"></span></label>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
</div>

   <br>
  

</div>

</div>
        <div class="bot">
                    <div id="table">
                        <table>
                            <tr class="tabletitle">
                                <td class="MedicineName"><b>MedicineName</b></td>
                                <td class="Quantity"><b>Quantity</b></td>
                                <td class="Unit_Price"><b>Unit_Price</b></td>
                                <td class="Discount"><b>Discount</b></td>
                                <td class="Total"><b>SubTotal</b></td>
                               
                            </tr>
                            @foreach($bill_receipt as $receipt)
                             <tr class="service">
                                <td class="tableitem"><p class="itemtext">{{$receipt->Med_Name}}</p></td>
                                <td class="tableitem"><p class="itemtext">{{$receipt->Quantity}}</p></td>
                                <td class="tableitem"><p class="itemtext">{{number_format($receipt->Unit_Price,2)}}</p></td>
                                <td class="tableitem"><p class="itemtext">{{$receipt->Discount}}</p></td>
                                <td class="tableitem"><p class="itemtext">{{number_format($receipt->Total,2)}}</p></td>
                                

                            </tr>
                            @endforeach

                           
                            <tr class="tabletitle">
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td class="Rate">Total</td>
                                <td class="Payment"><p class="itemtext">{{number_format($bill_receipt->sum('Total'),2)}}</p>

                                </td>
                                

                            </tr>
                        </table>
                        <div class="lecalcopy">
                            <p class="lecal"><strong><center>** Thank You For Visiting **</center</strong><br>

                            </p>
                        </div>
                        <div class="serial">
                        <p> Contact Us: 011-25 70 120</p>
                        </div>
                    </div>

        </div>
    </div>
<style>
        #invoice{
            box-shadow: 0 0 1in -0.25in rgb(0, 0, 5);
            padding:2mm;
            margin:0 auto;
            width:170mm;
            background: #fff;
        }
        #invoice::selection{
            background: #f315f3;
            color: #fff;
        }
        #invoice ::-moz-selection{
                background: #34495E;
                color: #fff;
        }
        #invoice h2{
            font-size: .5cm;
            color: #222;
        }
        #invoice p{
            font-size: .5cm;
            color: #222;
        }
        #invoice #top,#invoice #mid,  #invoice #bot{
            border-bottom: 1px solid #eee;
        }
        #invoice #top.logo{
            height: 60px;
            width: 60px;
            background-image: url() no-repeat;
            background-size: 60px 60px;
            border-radius: 50px;
        }
        #invoice .info{
            display: block;
            margin-left: 0;
            text-align: center;
        }
        #invoice #mid{
            min-height: 80px;
        }
        #invoice #bot{
            min-height: 50px;
        }
        #invoice .title{
                text-align: right;
        }
        #invoice .title p{
                text-align: right;
        }
        #invoice table{
               width: 100%;
               border-collapse: #eee;
        }
        #invoice .tabletitle{
               width: 0.5em;
               border-collapse: #eee;
        }
        #invoice .service{
              border-bottom: 1px solid #eee;
        }
        #invoice .MedicineName{
               width:24mm ;
             
        }
        #invoice .itemtext{
              font-size: 0.9em;
             
        }
        #invoice .legalcopy{
             margin-top:5mm ;
             text-align: center;
             
        }




</style>