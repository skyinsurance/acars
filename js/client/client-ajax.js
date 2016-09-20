
/******** function to download selected documents **********/

function downloadSelectedDocuments(c_id){
	
	var count = $(".checked_files:checked").length;
	if(count == 0){
		toastr.warning('Select atleast one document to download');
		return false;
	}
	$("#loadGif").show();
	var i = 0;
	
	$('.checked_files:checked').each(function () {
        var id = $(this).attr("id");
        //alert("Do something for: " + id);
		//var $datastr = $('#general').serialize();	
		//$('#send-single-mail').prop('disabled', true);
		
		var filename = $(this).val();
		var $datastr = 'name='+filename+'&id='+id+'&company_id='+c_id;
		
		$url = '/client/dashboard/downloadfiles?' + $datastr;
		
		$.ajax({ 
				url: $url,
				data: $datastr,
				type: 'GET',
				success: function(html) {				
					if(html == '200'){
						i++;
					}
					if(count == i){
						convertZip("'"+c_id+"'");
					}
				}
					
		});
    });
}

/******** function to convert the folder into zip **********/

function convertZip(id){
	$url = '/client/dashboard/convertfoldertozip?company_id=' + id;
		
	$.ajax({ 
		url: $url,
		type: 'GET',
		success: function(html) {				
			var data = jQuery.parseJSON(html);
			if(data.result == 'success'){
				$("#loadGif").hide();
				$('#download-documents').modal('hide');
				window.location = "/Images/sharefile_docs/"+data.folder+".zip";
				//deleteDownloadedFiles("'"+data.folder+"'");
			}
			
		}					
	});
}

/******** function to delete the already downloaded items **********/

function deleteDownloadedFiles(company_id){
	$('.checked_files').attr('checked', false);
	$url = '/client/dashboard/removedownloadedfolders?id=' + company_id;
		
	$.ajax({ 
		url: $url,
		type: 'GET',
		success: function(html) {				
			console.log(html);
		}					
	});
}