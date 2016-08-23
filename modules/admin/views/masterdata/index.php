
<style>
.img-width{
width: 15%;
margin-left: 30px;
}

.img-width-td{
width: 15%;
}
</style>
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Brands</h3>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Managing all the brands of the client is done from the list below.</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: right;">
	<table class="table filter-table middle-align mb-0">
		<tbody>
			<tr >


				
				<td title="Add Brand" style="border-top:none;"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/addbrand">
				<button type="reset" class="btn btn-success btn-sm filter-btn-search" style="">
				<i class="fa fa-plus" aria-hidden="true" style="margin-right:5px;"></i>Add Brand</button></a></td>

				
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
					<table id="exampleManagedata" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Thumbnail</th>
								<th>Brand Name</th>
								<th>Support Email</th>
								<th>Support Phone Number</th>
								<th>Status</th>
								
								
								<th>Edit</th>
								<th>Delete</th>
								

							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td class="img-width-td"><img class="img-width" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"></td>
								<td>ACAReportingService.com</td>
								<td>aca@gmail.com</td>
								<td>9889898989</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/editbrand" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>
							
						<tr>

								<td class="img-width-td"><img class="img-width" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/Logo_Image_02.png"></td>
								<td>Pro-ACAReporting.com</td>
								<td>proacar@gmail.com</td>
								<td>9569898989</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/editbrand" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>
							
							<tr>

								<td class="img-width-td"><img class="img-width" src="https://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg"></td>
								<td>AbyBenefits-ACAReporting.com</td>
								<td>aca@gmail.com</td>
								<td>9599898989</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/editbrand" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>
							
							<tr>

								<td class="img-width-td"><img class="img-width" src="https://upload.wikimedia.org/wikipedia/en/4/4a/Commons-logo.svg"></td>
								<td>StaffACA.com</td>
								<td>staff@gmail.com</td>
								<td>8889898989</td>
								<td><a href="#" style="color:red;">Inactive</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/editbrand" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>
							
							<tr>

								<td class="img-width-td"><img class="img-width" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/Logo_Image_02.png"></td>
								<td>Sky-ACAReporting.com</td>
								<td>acar@gmail.com</td>
								<td>8689898989</td>
								<td><a href="#">Active</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/editbrand" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
							</tr>
							
							<tr>

								<td class="img-width-td"><img class="img-width" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/Logo_Image_02.png"></td>
								<td>POLO</td>
								<td>polo@gmail.com</td>
								<td>7889898989</td>
								<td><a href="#"  style="color:red;">Inactive</a></td>
							
								<td><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/editbrand" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							 	<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 
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
			    $('#exampleManagedata').DataTable({

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
		</div>
            
                        </div>
            <!-- /.box-body -->
          </div>