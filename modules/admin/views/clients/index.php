
 
<div class="box box-warning">
	<div class="box-header with-border">
		<h3 class="box-title">Manage Clients</h3>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">Managing all the clients of the application
			is done from the list below.</p>
	</div>

	<!-- /.box-header -->
	<div class="box-body">

		<div>
		<div class=" table  grid-filter m-5 filter-div-back" style="float: left;padding: 12px;
    border-top: 1px solid #ddd;">
				<div class="col-lg-12 padding-left-0" style="    padding-right: 0;">
				
				
				<div class="col-lg-3 col-md-6 padding-left-0 col-xs-4"  style="display: inline-flex;white-space: nowrap;">
				<span style="line-height:1.9;">Search by Company :</span>&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="filter_keyword" value=""></div>
				
				
				
				
				<div class="col-lg-3 col-md-6 col-xs-4" style="display: inline-flex;white-space: nowrap;">
				<button class="btn btn-primary" style="margin-right:5px;">Search</button>
				<button class="btn btn-primary">Clear</button>
				</div>
				
				
				
				
				
				
				<div class="col-lg-3 pull-right col-md-6 col-xs-4 padding-right-0">
				
				<div>
				<a href="<?php echo Yii::$app->homeUrl;?>admin/clients/addform"><button type="reset" class="btn btn-success filter-btn-search pull-right">
										<i class="fa fa-plus" aria-hidden="true" style="margin-right: 5px;"></i>Add Client
									</button></a>
				</div>
				</div>
				</div>
				
				
				
				
			</div>
			
			<div>

				<div class="row m-5">
					<div class="col-xs-12 panel-0">
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body table-responsive">
								<table id="exampleClients" class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">

											<th>Client ID</th>
											<th>Client Name</th>
											<th>Brand</th>

											
											<th>Contact First Name</th>
										    <th>Contact Last Name</th>
										    <th style=" width: 310.182px;">Package Type</th>
										    <th style=" width: 80.1818px;">ACA Year</th>
											<th>Update</th>
											
										</tr>
									</thead>
									<tbody>

										<tr>

											<td>10000</td>
											<td>Texas Group</td>
											<td>ACAReportingService.com</td>
											
											
											<td>Bob</td>
											<td>Marley</td>
											
											<td>Single EIN
											<!-- <select class="form-control form-height">
											  <option>Select</option>
							                     <option>Single EIN</option>
							                     <option selected>Union</option>
							                     <option>Multiple, Aggregated Companies</option>
							                     </select>-->
							                     </td>
											<td>2016
											
								                    </td>
											<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/clients/editclient"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
										
										</tr>

										<tr>

											<td>10001</td>
											<td>California Group</td>
											<td>Pro-ACAReporting.com</td>
											
											
											<td>Srusti</td>
											<td>Karn</td>
											
											<td> Union </td>
											<td>2016</td>
								                    
								                    <td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/clients/editclient"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
										

											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

										<tr>

											<td>10002</td>
											<td>Texas Group</td>
											<td>StaffACA.com</td>
											
											
											<td>Venkatesh</td>
											<td>Venga</td>
											
											<td>
											Multiple, Aggregated Companies
							                     </td>
											<td>
											2016
								             </td>
								                    
											<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/clients/editclient"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
									
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

											<tr>

											<td>10006</td>
											<td>Sanjose Group</td>
											<td>StaffACA.com</td>
											
											
											<td>Balaji</td>
											<td>kumar</td>
											
											<td>
											 Single EIN
							                     </td>
											<td>
											2016
								                    </td>
								                    
											<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/clients/editclient"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
									
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

											<tr>

											<td>10007</td>
											<td>Tata Group</td>
											<td>StaffACA.com</td>
											
											
											<td>Aravind</td>
											<td>kumar</td>
											
											<td>
									        	Union
							                     </td>
											<td>
											2016
								             </td>
								                    
											<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/clients/editclient"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
									
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

									</tbody>

								</table>
							</div>
							
							
						</div>
						<!-- /.box -->
					</div>
				</div>
			</div>


			<script type="text/javascript">

			$(document).ready(function(){
			    $('#exampleClients').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1,-2,-3 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
function agencySearch(){


	url='/admin/agency?filter=on';

	var filter_keyword =document.getElementById('filter_keyword').value;
	
	if (filter_keyword) {
		url += '&keyword='+ encodeURIComponent(filter_keyword);
	}

	var filter_status =document.getElementById('filter_status').value;
	
	if (filter_status !=0) {
		url += '&status=' + encodeURIComponent(filter_status);
	}

	var filter_package =document.getElementById('package').value;
	
	if (filter_package !=0) {
		url += '&package=' + encodeURIComponent(filter_package);
	}
	

	 var selects = document.getElementById("filter_pages");
	 var selected = document.getElementById("filter_pages").value;
	 
//	 var Value = selects.options[selects.selectedIndex].value;// will gives u
	 // value

	 var selectedText = selects.options[selects.selectedIndex].text;
//	 var selectedValue = selects.options[selected.selectedValue].value;
	 var filter_count = selectedText;
	 var filter_value = selected;
		
	 if (filter_count) {
			url += '&filter_pages=' + encodeURIComponent(filter_count);
	}
	 if (filter_value) {
			url += '&filter_value=' + encodeURIComponent(filter_value);
	}	
	
	location=url;

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
