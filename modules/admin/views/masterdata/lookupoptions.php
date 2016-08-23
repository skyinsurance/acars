
<script type="text/javascript">
	$(document).ready(function(){
			    $('#exampleLookupoptions').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1,-2 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
</script>

<div class="box box-warning container-fluid">
	
	<div class="box-header with-border">
              <h3 class="box-title">Lookup Options</h3>
            </div>
			
  <div class="col-xs-12 header-new-main width-98 hide">  
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">All fields like drop down, radio buttons and check boxes are managed here.</p>
</div>
	
	<div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: right;">
	<table class="table filter-table middle-align mb-0">
		<tbody>
			<tr >
				<td title="Add Lookup Option" style="border-top: none;"><a  href="#modal-container-430190" data-toggle="modal">
				<button type="reset" class="btn btn-success btn-sm filter-btn-search" style="">
				<i class="fa fa-plus" aria-hidden="true" style="margin-right:5px;"></i>Add Lookup Options</button></a></td>

				
			</tr>
		</tbody>
	</table>
</div>
<div>

	<div class="row m-5">
		<div class="col-xs-12 panel-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="exampleLookupoptions" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Lookup Name</th>
								<th>Lookup Options</th>
								<th>Status</th>
								
								
								<th>Edit</th>
								<th>Delete</th>
								

							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>Product</td>
								<td>ACA B Forms Only, ACA General Consulting</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="#modal-container-430191" data-toggle="modal" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>
							
								
							<tr>

								<td>Package Type</td>
								<td>Single EIN,Union EIN</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="#modal-container-430191" data-toggle="modal" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>	
							
							<tr>

								<td>Category</td>
								<td>Active, Inactive, Any</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="#modal-container-430191" data-toggle="modal" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>										
						</tbody>

					</table>
				</div>
			<!-- 	<div class="col-md-12">
				<ul class="pagination">
					<li><a> << </a></li>
					<li class="active"><a>1<span class="sr-only">(current)</span>
					</a></li>
					<li><a>2</a></li>
					<li><a>3</a></li>
					<li><a>4</a></li>
					<li><a>5</a></li>
					<li><a>>></a></li>
				</ul>
				
				<div class=" pagination pull-right">
							<div class="results">Showing 1 to 1 of 1 (1 Page)</div>	
					<select id="filter_pages" onchange="agencySearch();" name="lookup_value">
						<option value="3">5</option>
						<option value="4" selected>10</option>
						<option value="5">15</option>
						<option value="6">20</option>
						<option value="7">25</option>
						</select>						
				</div>
				</div>-->
			</div>
			<!-- /.box -->
		</div>
	</div>
</div>

		</div>
            
                        </div>
</div>


<div class="modal fade" id="modal-container-430190" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Add Lookup Option</h4>
			</div>
			<div class="modal-body" style="float: left;">
			
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Lookup Name:</label>
				</div>
				<div class="col-sm-8">
					<input class="form-control add-member-input"
						placeholder="lookup options" id="current-password" /> <label
						class="error-msg" id="current-password-error"></label>
				</div>
			
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Options:</label>
				</div>
				<div class="col-sm-8">
					<textarea  rows="4" cols="6"  class="form-control add-member-input"
						placeholder="Options" id="current-password" ></textarea> 
				</div>
			</div>
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-success" id="chng_pwd_btn">Save
					</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				


			</div>
		</div>
	</div>
</div>




<div class="modal fade" id="modal-container-430191" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Update Lookup Option</h4>
			</div>
			<div class="modal-body" style="float: left;">
			
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Lookup Name:</label>
				</div>
				<div class="col-sm-8">
					<input class="form-control add-member-input"
						placeholder="lookup options" id="current-password" /> <label
						class="error-msg" id="current-password-error"></label>
				</div>
			
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Options: </label>
				</div>
				<div class="col-sm-8">
					<textarea  rows="4" cols="6"  class="form-control add-member-input"
						placeholder="Options" id="current-password" >Yes, No ,N/A</textarea> 
				</div>
			</div>
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-success" id="chng_pwd_btn"
					>Update
					</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				


			</div>
		</div>
	</div>
</div>
