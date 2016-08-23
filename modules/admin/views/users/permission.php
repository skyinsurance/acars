
<div class=" box box-warning container-fluid">
  <div class="box-header with-border">
              <h3 class="box-title">Assign Permissions to Praveen</h3>
			  	<span style="float:right;"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/index">Back to Manage Users</a></span>
	
            </div>
	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">You can manage permissions from this screen.</p>
	</div>
	<div class="col-md-12">
		<div class=" box-info">

			<form class="form-horizontal" style="margin-left: 33px;">
				<div class="box-body">
				

					<div class="form-group">
						<div class="col-sm-6">
							<label class="control-label"><h4>Assign Permissions</h4></label>
							
	<table id="example2" class="table table-bordered table-hover ">

		<thead>
			<tr class="tr-grid-header">
				<th style="width: 10%;">Select</th>
				<th>Pages</th>
			</tr>
		</thead>

		<tbody>
		         <tr>
				<td style="text-align: center;"><input type="checkbox" id="selectall" ></td>
				<td><span id="changeText">Select All</span> </td>
			     </tr>

				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" checked name="permission_id[1]" value="1"  ></td>
				<td>Dashboard				
				</td>
		      	</tr>					

				
				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" checked name="permission_id[3]" value="3"  ></td>
				<td>Reports				
				</td>
			    </tr>					
					
				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" name="permission_id[6]" value="6"  ></td>
				<td>Tracking code				
				</td>
		    	</tr>					

				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" checked name="permission_id[7]" value="7"  ></td>
				<td>Landing Pages				
				</td>
		    	</tr>					

				
				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" name="permission_id[9]" value="9"  ></td>
				<td>Manage Subscription				
				</td>
			    </tr>					

				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" name="permission_id[10]" value="10"  ></td>
				<td>Administration				
				</td>
			    </tr>					

			    <tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" name="permission_id[10]" value="10"  ></td>
				<td>Manage Brand				
				</td>
			    </tr>
			    
				<tr>
				<td style="text-align: center;"><input type="checkbox" class="checkbox1" name="permission_id[11]" value="11"  ></td>
				<td>Message Center				
				</td>
			    </tr>					

								
			</tbody>
	</table>	
						
			</div>
		      </div>


				</div>
				<!-- /.box-body -->
				<div class="form-group" style="margin-bottom:10px;">
				<div class="col-md-6">
				<div class=" pull-right">
				<button type="submit" class="btn btn-success ">Save Changes</button>
					<a type="submit" class="btn btn-default" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users">Cancel</a>
					
				</div>
				</div>
				</div>
				<!-- /.box-footer -->
			</form>
		</div>
	</div>
</div>