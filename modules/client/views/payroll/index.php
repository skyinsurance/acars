<script type="text/javascript">
// $(function() {
// 	$( "#companies-menu-id" ).addClass( "active" );
// });

function showuploadconfirm()
{
	$('#upload-confirm').modal('show');
}
</script>
<style>

.no-pd-rg{
	 padding-right: 0; 
  }
  
select{ padding: 2px 0px;}

.payroll-div {
	margin-top: 10px;
	margin-bottom: 10px;
	border-bottom: 1px solid #ddd;
	padding: 0px;
	float: left;
	width: 100%;
}

a.machine-icons {
	height: 49px;
	line-height: 49px;
	display: inline-block;
	text-align: center;
	width: 50px;
	border-right: 1px solid #ddd;
}
.btn_icons {
    margin-right: 10px;
}

.input-group .input-group-addon {
 width: 50px;}
 
 @media (min-width: 992px)
.modal-lg {
    width: 1067px;
}

td .form-control{
width:inherit;
}
.datepicker{z-index:1151 !important;}

#sticky.stick {
    margin-top: 0 !important;
    position: fixed;
    top: 0;
    z-index: 1551;
    border-radius: 0 0 0.5em 0.5em;
    background-color: #222d32;
    padding: 8px!important;
    margin-left: -3px;
   
    right: 0px;
}
</style>

<div class="box box-warning container-fluid">


	<div class="box-header with-border">
		<h3 class="box-title col-xs-6">Payroll Data - ABC Corp <small>(ACA-10000-1)</small></h3>
		<div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">Enter the information below for ALL
			employees who were employed with your company for any day of the
			reporting calendar year. This includes all part time and full time
			employees.</p>
	</div>

	<!-- /.box-header -->
	<div class="box-body">



		<div class="col-md-12 ">
			
<nav class="navbar " role="navigation" style="margin-bottom: 0px; float: left; width: 100%;">
		<div id="sticky-anchor"></div>
		<div class="col-md-12 padding-left-0 padding-right-0" id="sticky" >
			

			<div class="" id="heading-navbar-collapse">
				<div class="navbar-left document-context-menu" >
				<div class="btn-category pull-right">

					

						<div class="" style="">

						
								<a href="#" class="last btn navbar-btn btn-default hide" data-toggle="tooltip" data-placement="bottom" title="" data-original-title=""><i style="color: #0000" class="fa  fa-flag fa-lg btn_icons"></i>Flag Selected Employees</a>															
								<!--href="#modal-container-349870" data-toggle="modal" --> 
							
				<div class="btn-group">
				  <button type="button" class="btn btn-default"><i
								class="fa fa-download fa-lg btn_icons"></i>Download</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv">Download Payroll Template</a></li>
					<li><a href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv">Download Employment Period</a></li>
				   
				  </ul>
				</div>
				
				<div class="btn-group">
				  <button type="button" class="btn btn-default"><i
								class="fa fa-upload fa-lg btn_icons"></i>Upload</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
					<li><a onclick="showuploadconfirm();" href="#">Upload Payroll Data</a></li>
					<li><a onclick="showuploadconfirm();" href="#">Upload Employment Period</a></li>
				   
				  </ul>
				</div>
						
								
								<a class="last btn navbar-btn btn-default hide"
								id="display-full" href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Payroll Template</a> <a class="last btn navbar-btn btn-default hide"
								id="display-940" href="#" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-upload fa-lg btn_icons"></i>Upload Payroll Data</a> <a
								class="last btn navbar-btn btn-default" id="delete_selected"  onclick="myFunction();"
								data-toggle="tooltip" data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-times fa-lg btn_icons"></i>Delete Selected</a>
								<!--<a class="last btn navbar-btn btn-default"
								id="display-full" href="<?php //echo Yii::$app->homeUrl;?>Images/sample.csv" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Sample CSV</a>-->
						</div>
						
						
					</div>
				
				</div>

				<div class="navbar-right document-context-menu" style="margin-right: 0px !important;">

					<div class="buttons pull-right" style="line-height: 35px;">
						<button type="reset" class="btn btn-success btn-sm filter-btn-search"
							style="" onclick="addemployRow();"> <i
							class="fa fa-plus" aria-hidden="true" style="margin-right: 5px;"></i>Add
							Employee
						</button>
						<button type="reset" class="btn btn-success btn-sm filter-btn-search"
							style="" >Save
						</button>
					</div>

				</div>
			</div>
		</div>
	</nav>
			<!--
			<div class="col-sm-3 form-group" style="margin-bottom: 10px;">
				<a class="btn btn-block btn-social btn-dropbox"> <i
					class="fa fa-download"></i> Download Payroll Template
				</a>
			</div>
			<div class="col-sm-3 form-group" style="margin-bottom: 10px;">
				<a class="btn btn-block btn-social btn-success"> <i
					class="fa fa-upload"></i> Upload Payroll Data
				</a>
			</div>
			<div class="col-sm-3 form-group" style="margin-bottom: 10px;">
				<a class="btn btn-block btn-social btn-google"> <i
					class="fa fa-times"></i> Delete Selected Records
				</a>
			</div>
-->
		</div>


		<div class=" col-md-12 no-pd-rg" style="margin-top: 15px;">
			





	
		<div class="row col-xs-12 panel-0 no-pd-rg">
			

				<!-- /.box-header -->
				<div class=" table-responsive">
					<table id="employee_add" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th><input type="checkbox"></th>
								<th>Legal First Name</th>
								<th class="width-45">M.I</th>
								
								<th>Legal Last Name</th>
								<th class="width-62">Suffix</th>
								<th class="width-102">SSN</th>
								
								<th>Address 1</th>
								<th> Apt#, Suite</th>
								<th>City or Town</th>
								<th class="width-45" >State</th>
								<th class="width-80" >ZIP Code</th>
								<th class="width-80">Date of Birth</th>
								<th>Notes</th>
								<th>Emp.Status</th>
							</tr>
						</thead>
						<tbody >
							
							<tr>

								<td><input type="checkbox" ></td>
								<td><input type="text" value="Bob" class="form-control"></td>
								<td class="width-45"><input type="text" maxlength="2" class="form-control"></td>
								<td><input type="text" value="Rich" class="form-control"></td>
								<td class="width-62"><input type="text" class="form-control" value="Mr" maxlength="5">
								</td>
								<td class="width-102"><input type="text" value="111-11-5555" class="form-control"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101" class="form-control"></td>
								<td><input type="text" class="form-control"></td>
								<td><input type="text" vlaue="Green Ville" class="form-control"></td>
								<td class="width-45"> <input type="text" value="SC" maxlength="2" class="form-control"></td>
								<td class="width-80"> <input type="text" value="525252" maxlength="6" class="form-control"></td>
								
								
								<td class="width-80"><input type="" class="form-control datepicker" value="04/10/2015"></td>
							
							
								
								<td><input type="text" class="form-control"></td>
								<td><input type="button" class="btn btn-success btn-sm" value="Add"  onclick="showemployment();" style="white-space:nowrap;"></td>
							
							</tr>
							
							<tr>

								<td><input type="checkbox" ></td>
								<td><input type="text" value="Bob" class="form-control"></td>
								<td class="width-45"><input type="text" maxlength="2" class="form-control"></td>
								<td><input type="text" value="Rich" class="form-control"></td>
								<td class="width-62"><input type="text" class="form-control" value="Mr" maxlength="5">
								</td>
								<td class="width-102"><input type="text" value="111-11-5555" class="form-control"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101" class="form-control"></td>
								<td><input type="text" class="form-control"></td>
								<td><input type="text" vlaue="Green Ville" class="form-control"></td>
								<td class="width-45"> <input type="text" value="SC" maxlength="2" class="form-control"></td>
								<td class="width-80"> <input type="text" value="525252" maxlength="6" class="form-control"></td>
								
								
								<td class="width-80"><input type="" class="form-control datepicker" value="04/10/2015"></td>
							
							
								
								<td><input type="text" class="form-control"></td>
								<td><input type="button" class="btn btn-success btn-sm" value="Add"  onclick="showemployment();" style="white-space:nowrap;"></td>
							
							</tr>
							
							<tr>

								<td><input type="checkbox" ></td>
								<td><input type="text" value="Bob" class="form-control"></td>
								<td class="width-45"><input type="text" maxlength="2" class="form-control"></td>
								<td><input type="text" value="Rich" class="form-control"></td>
								<td class="width-62"><input type="text" class="form-control" value="Mr" maxlength="5">
								</td>
								<td class="width-102"><input type="text" value="111-11-5555" class="form-control"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101" class="form-control"></td>
								<td><input type="text" class="form-control"></td>
								<td><input type="text" vlaue="Green Ville" class="form-control"></td>
								<td class="width-45"> <input type="text" value="SC" maxlength="2" class="form-control"></td>
								<td class="width-80"> <input type="text" value="525252" maxlength="6" class="form-control"></td>
								
								
								<td class="width-80"><input type="" class="form-control datepicker" value="04/10/2015"></td>
							
							
								
								<td><input type="text" class="form-control"></td>
								<td><input type="button" class="btn btn-success btn-sm" value="Add"  onclick="showemployment();" style="white-space:nowrap;"></td>
							
							</tr>
							
																				
						</tbody>

					</table>
				</div>
				<ul class="pagination">
					<li><a> << </a></li>
					<li class="active"><a>1 <span class="sr-only">(current)</span>
					</a></li>
					<li><a>2</a></li>
					<li><a>3</a></li>
					<li><a>4</a></li>
					<li><a>5</a></li>
					<li><a>>></a></li>
				</ul>
				<!-- /.box-body -->
				<div class=" pagination pull-right">
							<div class="results">Showing 1 to 1 of 1 (1 Page)</div>							<select id="filter_pages" name="lookup_value">
<option value="3">5</option>
<option value="4">10</option>
<option value="5">15</option>
<option value="6">20</option>
<option value="7">25</option>
</select>							</div>
			
			<!-- /.box -->
		</div>
	


<script type="text/javascript">

$(document).ready(function(){
	 datepickerintialise();
	$("#flag_checkbox").click(function(){
		 var isChecked = $("#flag_checkbox").is(":checked");
			if(isChecked)
			{
				$('#flag_textarea').show();
			}
			else
			{
				$('#flag_textarea').hide();
			}
	});


	
	 
});


function myFunction() {
    confirm("Are you sure want to delete ?");
}

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('stick');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});


function addemployment()
{
	$new_row = '<tr>'

		+'<td><input type="text" class="datepicker form-control form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><input type="text" class="datepicker form-control form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><select class="form-control form-height "><option>Select</option><option>Plan Class1</option><option>Plan Class2</option></select></td>'
		
		+'<td><select class="form-control form-height "><option>Select</option><option>FT</option><option>PT</option></select></td>'
		+'<td><input type="checkbox"></td>'
		
		+'<td><textarea class="form-control form-height "></textarea></td>'
		+'<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>'
	+'</tr>';
	
	
}

function addRow() {

	var table = document.getElementById("employment_period_div").getElementsByTagName('tbody')[0];;

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "";
	element1.className ="datepicker form-control";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "";
	element2.className ="datepicker form-control";
	cell2.appendChild(element2);

		var cell3 = row.insertCell(2);
		 var element3 = document.createElement("select");
		 element3.className ="form-control";
	    //element2.type = "select";
	    var option1 = '';
	    var option1 = document.createElement("option");
	    option1.innerHTML = "Option1";
	    option1.value = "1";
	    element3.add(option1, null);
	    var option2 = '';
	    var option2 = document.createElement("option");
	    option2.innerHTML = "Option2";
	    option2.value = "2";
	    element3.add(option2, null);
	    cell3.appendChild(element3);


		var cell4 = row.insertCell(3);
		 var element4 = document.createElement("select");
		 element4.className ="form-control";
	   var option3 = document.createElement("option");
	    option3.innerHTML = "FT";
	    option3.value = "1";
	    element4.add(option3, null);
	    var option4 = document.createElement("option");
	    option4.innerHTML = "PT";
	    option4.value = "2";
	    element4.add(option4, null);
	    cell4.appendChild(element4);

	    var cell5 = row.insertCell(4);
		var element5 = document.createElement("input");
		element5.type = "checkbox";
		element5.name="chkbox[]";
		cell5.appendChild(element5);


		var cell6 = row.insertCell(5);
		var element6 = document.createElement("textarea");
		element6.type = "";
		element6.name="";
		cell6.appendChild(element6);

		var cell7 = row.insertCell(6);
		var rowcount = rowCount + 1
		cell7.innerHTML = '<a  onclick="deleteRow('+rowcount+')" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a>';

 datepickerintialise();

}


function addemployRow() {

	var table = document.getElementById("employee_add").getElementsByTagName('tbody')[0];;

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "checkbox";
	element1.className ="";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "text";
	element2.className ="form-control";
	cell2.appendChild(element2);

	var cell3 = row.insertCell(2);
	var element3 = document.createElement("input");
	element3.type = "text";
	element3.className ="form-control width-45";
	element3.maxLength = "2";
	
	cell3.appendChild(element3);
	
	
	var cell4 = row.insertCell(3);
	var element4 = document.createElement("input");
	element4.type = "text";
	element4.className ="form-control";
	cell4.appendChild(element4);
	
		var cell5 = row.insertCell(4);
		 var element5 = document.createElement("input");
		 element5.type = "text";
		 element5.className ="form-control width-62";
		 element3.maxLength = "5";
			
		  cell5.appendChild(element5);
		 


		var cell6 = row.insertCell(5);
	var element6 = document.createElement("input");
	element6.type = "text";
	element6.className ="form-control width-102";
	cell6.appendChild(element6);
	
	
	var cell7 = row.insertCell(6);
	var element7 = document.createElement("input");
	element7.type = "text";
	element7.className ="form-control";
	cell7.appendChild(element7);
	
	var cell8 = row.insertCell(7);
	var element8 = document.createElement("input");
	element8.type = "text";
	element8.className ="form-control";
	cell8.appendChild(element8);
	
	var cell9 = row.insertCell(8);
	var element9 = document.createElement("input");
	element9.type = "text";
	element9.className ="form-control";
	cell9.appendChild(element9);
		
		var cell10 = row.insertCell(9);
		 var element10 = document.createElement("input");
		 element10.type = "text";
		 element10.className ="form-control width-45";
		 element10.maxLength = "2";
	  /*  var option1 = '';
	    var option1 = document.createElement("option");
	    option1.innerHTML = "Select";
	    option1.value = "1";
	    element10.add(option1, null);
	    var option2 = '';
	    var option2 = document.createElement("option");
	    option2.innerHTML = "( AL ) Alabama ";
	    option2.value = "2";
	    element10.add(option2, null);
		
		var option3 = '';
	    var option3 = document.createElement("option");
	    option3.innerHTML = "( NH ) New Hampshire ";
	    option3.value = "2";
	    element10.add(option3, null);*/
		
		
	    cell10.appendChild(element10);

			var cell11 = row.insertCell(10);
	var element11 = document.createElement("input");
	element11.type = "text";
	element11.className ="form-control width-80";
	cell11.appendChild(element11);
	
		var cell12 = row.insertCell(11);
	var element12 = document.createElement("input");
	element12.type = "";
	element12.className =" datepicker form-control width-80";
	cell12.appendChild(element12);
	
	
	var cell13 = row.insertCell(12);
	var element13 = document.createElement("input");
	element13.type = "text";
	element13.className ="form-control";
	cell13.appendChild(element13);
	
//	var cell14 = row.insertCell(13);
//	var element14 = document.createElement("input");
//	element14.type = "button";
//	element14.className ="btn btn-success";
//	cell14.appendChild(element14);
		var cell14 = row.insertCell(13);
		var rowcount = rowCount + 1
		cell14.innerHTML = '<button  onclick="showemployment();" class="btn btn-success btn-sm" style="white-space:nowrap;">Add</button>';

		
 datepickerintialise();

		

}


function showemployment()
{
	datepickerintialise();
	$('#myModal').modal('show');
}
function deleteRow(rowID) {
	try {
	var table = document.getElementById("employment_period_div").getElementsByTagName('tbody')[0];
	rowID--;
	var rowCount = table.rows.length;
		var row = table.rows[rowID];
			table.deleteRow(rowID);
		
		

	}catch(e) {
		// alert(e);
	}
}


function Confirmselected()
{
	
}

</script>
		
			
			
		
		</div>

		<div>




			<script type="text/javascript">
function agencySearch(){


	

}

function clearGrid()
{
	url='/admin/agency';
	location=url;
	
}




</script>
		</div>

	</div>
	<!-- /.box-body -->
</div>







<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Employment Period</h4>
      </div>
      <div class="modal-body">
        <div class="row">
						<div class="box">
							<div class="box-header with-border ">
								<!-- <h3 class="box-title col-xs-6">Employment Periods</h3> -->
								<div class="col-xs-6 pull-right padding-right-0">
									<button onclick="addRow();" type="reset"
										class="btn btn-success btn-sm filter-btn-search pull-right">
										<i class="fa fa-plus" aria-hidden="true"
											style="margin-right: 5px;"></i>Add Employment Period
									</button>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive">

								<table id="employment_period_div"
									class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">

											<th>Hire Date</th>
											<th>Termination Date</th>

											<th>Medical Plan Class Name</th>
											<th>FT/PT Status</th>
											<th>Don't Apply Waiting Period</th>
											<th>Notes</th>
											<th>Action</th>

										</tr>
									</thead>
									<tbody>

									<tr><td><input type="" class="datepicker form-control"></td><td><input type="" class="datepicker form-control"></td><td><select class="form-control"><option value="1">Option1</option><option value="2">Option2</option></select></td><td><select class="form-control"><option value="1">FT</option><option value="2">PT</option></select></td><td><input type="checkbox" name="chkbox[]"></td><td><textarea name=""></textarea></td><td><a onclick="deleteRow(1)" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>



									</tbody>

								</table>
							</div>

						</div>

					</div>
					
					<div class="row">
						<div class="box">
							<div class="box-header with-border ">
								<h3 class="box-title col-xs-6">Non-Consistent Employee
									Contributions</h3>

							</div>
							<!-- /.box-header -->
							<div class="box-body ">
								<p class="highlight-fancy">
									<span class="status"><i class="fa fa-info-circle"
										aria-hidden="true"></i></span> Enter the monthly cost for
									coverage offered if the employee was in non-consistent cost
									class.
								</p>
								<div class="">
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Jan </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Feb </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Mar </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Apr </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> May </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Jun </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Jul </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Aug </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Sep </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Oct </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Nov </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Dec </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>


								</div>
							</div>

						</div>

					</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>

<!-- Modal -->
<div id="upload-confirm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Confirmation</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
        <h4>Please retain a copy of the file for your reference.</h4>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>