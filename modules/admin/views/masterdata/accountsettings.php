<script type="text/javascript">
	$(document).ready(function(){
			    $('#exampleAccountsettings').DataTable({

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

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Settings</h3>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">The settings done here apply all over the
			application</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>

<div>

	<div class="row m-5">
		<div class="col-xs-12 panel-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="exampleAccountsettings" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">
								<th>Sl. No.</th>
								<th>Title</th>
								<th>Details</th>
								<th style="width:20%;">Current Value</th>
								<th>Revised Value</th>
								<th>Update</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>1</td>
								<td>Emails</td>
								<td>Please specify the mail id that you want it to be "from mail" in sent mails.</td>
							    <td>admin@acars.com</td>
							    
							    <td><input type="text" class="form-control" id="changed" value=""/>
									</td>
									
								<td><i class="fa fa-save" style="cursor: pointer;"></i></td>
								 
							</tr>
							
					
						<tr>

								<td>2</td>
								<td>Accounts</td>
								<td>Please specify the mail id that you want it to be "from mail" in sent mails.</td>
							    <td>admin@acars.com</td>
							    
							    <td><input type="text" class="form-control"  style="margin-bottom: 5px;" id="craig-user" placeholder="Username"> 
									<input type="text" class="form-control" id="craig-password" placeholder="Password">
									<label id="error-msg-2" class="red" style="float: left;"></label>	
									</td>
									
								<td><i class="fa fa-save" style="cursor: pointer;"></i></td>
								 
							</tr>
							
					
							
							
								<tr>

								<td>3</td>
								<td>Support Details</td>
								<td>Please specify the mail id that you want it to be "from mail" in sent mails.</td>
							    <td>admin@acars.com</td>
							    
							    <td><textarea class="form-control" rows="7" cols="10" id="changed_id_" maxlength="500"></textarea>
									</td>
									
								<td><i class="fa fa-save" style="cursor: pointer;"></i></td>
								 
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