@extends('blade-scafolding.layout.tableContent')

@section('content2')

<div style="width: 500px; margin-left: 10%;">
	<!-- <div style="margin-left: 35%; width: 150px;">
		<button type="button" data-toggle="modal" data-target="#exampleModalCenter" style="font-size: 20px; background-color: #F5A9BC; color: black; border-radius: 20px; border: 1px solid #F5A9BC;">Add event  <span class="glyphicon glyphicon-plus"></span></button>
	</div> -->
	<div class="table-responsive" style="width: 100%; margin-top: 20px;">
		<form>
			<ul>
				<li>
					<div>
						10.20am-11.00am
					</div>
					<div>any</div>
					<div>Saman Disasekaa : D001</div>
					<div>Patients: 23</div>
                </li>
			</ul>
		</form>
	</div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="opacity: 1; margin-top: 100px;">
    <div class="modal-dialog modal-dialog-centered" role="document" style="height: 0px;">
        <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">Add event</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 600px;">
                        <form>
                        	<div class="form-group">
                                <label for="" class="text-info">Specialization:</label><br>
                                <select id="inputState" class="form-control">
                                    <option selected>any</option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="text-info">Doctor Name:</label><br>
                                <input type="text-info" name="">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-info">Doctor ID:</label><br>
                                <input type="text-info" name="">
                            </div>
                            <div class="form-group">
                                <label for="date" class="date-info">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="time">From:</label>
                                <label for="time" style="margin-left: 
                                50%;">To:</label><br>
                                <input type="time" name="" style="width: 45%; margin-right: 30px;">
                                <input type="time" name="" style="width: 45%;">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-info">No of Patients:</label><br>
                                <input type="integer" name="">
                            </div>
                        </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
        </div>
    </div>
</div>
            <!--End model-->
@endsection