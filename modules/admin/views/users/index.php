
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Users</h3>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Managing all the users of the application is done from the list below.</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
            
     

	
	<div class=" table  grid-filter m-5 filter-div-back" style="float: left;padding: 12px;
    border-top: 1px solid #ddd;">
				<div class="col-lg-12 padding-left-0" style="    padding-right: 0;">
				
				
				<div class="col-lg-3 col-xs-4  padding-left-0" style="display: inline-flex;white-space: nowrap;">
				<span style="line-height:1.9;">Keyword :</span>&nbsp;&nbsp;&nbsp;<input type="text" class="form-control"
					id="filter_keyword"value=""></div>
				
				
				
				
				<div class="col-lg-3 col-xs-4 " style="display: inline-flex;white-space: nowrap;">
				<button class="btn btn-primary" style="margin-right:5px;">Search</button>
				<button class="btn btn-primary">Clear</button>
				</div>
				
		
				
				
				
				<div class="col-lg-3 pull-right col-xs-4  padding-right-0">
				
				<div>
				<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/addusers"><button type="reset" class="btn btn-success filter-btn-search pull-right">
										<i class="fa fa-plus" aria-hidden="true" style="margin-right: 5px;"></i>Add Users
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
					<table id="exampleUsers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Permissions</th>
								<th>Status</th>
								
								<th>Update</th>
							<!-- <th>Delete</th> -->	
								
							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>Praveen</td>
								<td>Singh</td>
								<td>praveen@gmail.com</td>
								<td><a title="Click to update permissions" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/permission">Dashboard, Landing Pages, Manage Brand</a></td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/updateusers" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 <!--  	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
							</tr>
				
				          	<tr>

								<td>Srusti</td>
								<td>Karn</td>
								<td>srusti@gmail.com</td>
								<td><a title="Click to update permissions" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/permission">Landing Pages, Manage Brand</a></td>
								<td><a style="color:red;" href="#">Inactive</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/updateusers" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							  
							</tr>
							
								<tr>

								<td>Aakash</td>
								<td>Yadav</td>
								<td>aakash@gmail.com</td>
								<td><a title="Click to update permissions" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/permission">Dashboard, Administration, Manage Brand</a></td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/updateusers" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	 
							</tr>
							
								<tr>

								<td>Anshula</td>
								<td>Madhavan</td>
								<td>anshula@gmail.com</td>
								<td><a title="Click to update permissions" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/permission">Dashboard, Landing Pages, Manage Brand, Administration	</a></td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/updateusers" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	 
							</tr>
							
								<tr>

								<td>Vector</td>
								<td>Naidu</td>
								<td>vector@gmail.com</td>
								<td><a title="Click to update permissions" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/permission">Dashboard, Manage Brand</a></td>
								<td><a style="color:red;" href="#">Inactive</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/updateusers" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	 
							</tr>
					     
														
						</tbody>

					</table>
				</div>
			<!--	<div class="col-md-12">
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
				 /.box-body
				<div class=" pagination pull-right">
							<div class="results">Showing 1 to 4 of 4 (1 Page)</div>	
					<select id="filter_pages" onchange="agencySearch();" name="lookup_value">
						<option value="3">5</option>
						<option value="4" selected>10</option>
						<option value="5">15</option>
						<option value="6">20</option>
						<option value="7">25</option>
						</select>						
				</div>
				</div> -->
			</div>
			
		</div>
	</div>
</div>

	</div>
        </div>
          </div>
          
          
<script type="text/javascript">

	$(document).ready(function(){
			    $('#exampleUsers').DataTable({

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