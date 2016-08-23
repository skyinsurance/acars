<style>
.add-member-label{
font-weight:500;
}
</style>

<div class="box box-warning">

            
			 <div class="box-header with-border">
              <h3 class="box-title col-sm-6">Company Users - ABC Corp <small>(ACA-10000-1)</small></h3>
              
               <a class="col-sm- btn bg-orange btn-flat btn-social pull-right">
                <i class="fa fa-youtube-play"></i>View Help Video
              </a>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Managing all the users of the application is done from the list below.</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: right">
	<table class="table filter-table middle-align mb-0">
		<tbody>
			<tr class="">


				
				
				<td title="Add User" style="border-top:none;">
				<a type="reset" class="btn btn-success btn-sm filter-btn-search" style="" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/client/dashboard/addusers">
				<i class="fa fa-plus" aria-hidden="true" style="margin-right:5px;"></i>Add User</a></td>

				


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
					<table id="exampleCompanyusers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>First Name</th>
								<th>Last Name</th>
							
								
								<th>Email</th>
								<th>Phone</th>
								<th>Role</th>
								<th>Access</th>
								
								<!-- <th>Companies</th>
								<th>Periods</th> -->
								<th>Update</th>
							
								
							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>Bob</td>
								<td>Baily</td>
								<td>bob@abc.com</td>
								<td>878-458-8878</td>
								<td>New Role</td>
								<td><!--<a href="<?php //echo Yii::$app->homeUrl;?>client/dashboard/permission">3/12</a>-->Admin, View, Sign, View HIPAA, Edit HIPAA, E-File</td>
							<!-- 	<td> <a  href="#modal-container-1" data-toggle="modal">3</a></td>
								<td> <a  href="#modal-container-2" data-toggle="modal">2 </a></td>-->
								<td style="text-align: center;"> 
			                                <a  href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updatecompanyusers"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
								
								
							</tr>	
							
							
							<tr>

								<td>Srusti</td>
								<td>Karn</td>
								<td>srusti@karn.com</td>
								<td>999-458-8878</td>
								<td>Pay Role</td>
								<td><!--<a href="<?php //echo Yii::$app->homeUrl;?>client/dashboard/permission">3/12</a>-->Admin, View, Sign, View HIPAA, Edit HIPAA, E-File</td>
								<!-- <td> <a  href="#modal-container-1" data-toggle="modal">3</a></td>
								<td> <a  href="#modal-container-2" data-toggle="modal">2 </a></td>-->
								<td style="text-align: center;"> 
			                                <a href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updatecompanyusers"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
								
							
							</tr>
							
								<tr>

								<td>Sanjana</td>
								<td>kumari</td>
								<td>sanjana@kumari.com</td>
								<td>999-458-8878</td>
								<td>Accounts</td>
								<td><!--<a href="<?php //echo Yii::$app->homeUrl;?>client/dashboard/permission">3/12</a>-->Admin, View, Sign, View HIPAA, Edit HIPAA, E-File</td>
								<!-- <td> <a  href="#modal-container-1" data-toggle="modal">3</a></td>
								<td> <a  href="#modal-container-2" data-toggle="modal">2 </a></td>-->
								<td style="text-align: center;"> 
			                                <a href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updatecompanyusers"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
								
							
							</tr>													
						</tbody>

					</table>
				</div>
				
		
			          </div>
			<!-- /.box -->
					</div>
				</div>
			</div>

		    </div>
            
            </div>
          </div>
          
          
<div class="modal fade" id="modal-container-1" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Companies</h4>
			</div>
			<div class="modal-body" >
			<div class="" >
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">OptionMatrix:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"  checked/></div>
			</div>
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">Syslink Sol:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"/></div>
			</div>
			
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">Ranger Infotech:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"  checked/></div>
			</div>
			
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">Iworkship Sol:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"  checked/></div>
			</div>
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


<div class="modal fade" id="modal-container-2" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Periods</h4>
			</div>
			<div class="modal-body" >
			<div class="" >
			<div class="col-md-12">
			<div class="col-sm-3 add-mem">
				<label class="add-member-label">2015:</label>
			</div>
			<div class="col-md-9"><input type="checkbox" checked/></div>
			</div>
			<div class="col-md-12">
			<div class="col-sm-3 add-mem">
				<label class="add-member-label">2016:</label>
			</div>
			<div class="col-md-9"><input type="checkbox"  checked/></div>
			</div>
			
		
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
          <script type="text/javascript">
	$(document).ready(function(){
			    $('#exampleCompanyusers').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
</script>