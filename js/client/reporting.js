
$(window).load(function() {
	
	leftNavigation();
	
});


function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}


function leftNavigation() {
	// get hash value
	var hash = window.location.hash;
	// now scroll to element with that id
	$('.basic_info_menu').removeClass('active');
	if (hash == '#basicinformation') {

		$('.steps').css( "display", "none" );
		$('.fixed-number').css( "display", "block");
	 	$(".parent-tabs").removeClass("accordian-band-color");
		$( "#collapseOne" ).prev().addClass("accordian-band-color");
		$(".custom-bg").removeClass("white");
	    $( "#collapseOne" ).prev().find('.custom-bg').addClass("white");
		$( ".panel-collapse" ).removeClass("in");
		$("#collapseOne").addClass( "in" );
		
		
		
		checkarraydiv();
		$('#basic_info_menu_1').addClass('active');
	} else if (hash == '#empstatustracking') {

		$('.steps').css( "display", "none" );
		$('.fixed-number').css( "display", "block");
	 	$(".parent-tabs").removeClass("accordian-band-color");
		$( "#collapseTwo" ).prev().addClass("accordian-band-color");
		$(".custom-bg").removeClass("white");
	    $( "#collapseTwo" ).prev().find('.custom-bg').addClass("white");
		$( ".panel-collapse" ).removeClass("in");
		$("#collapseTwo").addClass( "in" );
		checkarraydiv();
		$('#basic_info_menu_2').addClass('active');
		} else if (hash == '#planofferingcriteria') {

		$('.steps').css( "display", "none" );
		$('.fixed-number').css( "display", "block");
	 	$(".parent-tabs").removeClass("accordian-band-color");
		$( "#collapseThree" ).prev().addClass("accordian-band-color");
		$(".custom-bg").removeClass("white");
	    $( "#collapseThree" ).prev().find('.custom-bg').addClass("white");
		$( ".panel-collapse" ).removeClass("in");
		$("#collapseThree").addClass( "in" );
		checkarraydiv();
		
		$('#basic_info_menu_3').addClass('active');
	} else if (hash == '#designatedgovtentity') {
		
		$('.steps').css( "display", "none" );
		$('.fixed-number').css( "display", "block");
	 	$(".parent-tabs").removeClass("accordian-band-color");
		$( "#collapseFour" ).prev().addClass("accordian-band-color");
		$(".custom-bg").removeClass("white");
	    $( "#collapseFour" ).prev().find('.custom-bg').addClass("white");
		$( ".panel-collapse" ).removeClass("in");
		$("#collapseFour").addClass( "in" );
		
		checkarraydiv();
		$('#basic_info_menu_4').addClass('active');
	} else if (hash == '#aggregatedgroup') {
		
		$('.steps').css( "display", "none" );
		$('.fixed-number').css( "display", "block");
	 	$(".parent-tabs").removeClass("accordian-band-color");
		$( "#collapseFive" ).prev().addClass("accordian-band-color");
		$(".custom-bg").removeClass("white");
	    $( "#collapseFive" ).prev().find('.custom-bg').addClass("white");
		$( ".panel-collapse" ).removeClass("in");
		$("#collapseFive").addClass( "in" );
		
		checkarraydiv();
		$('#basic_info_menu_5').addClass('active');
	} else if (hash == '#anythingelse') {
		
		$('.steps').css( "display", "none" );
		$('.fixed-number').css( "display", "block");
	 	$(".parent-tabs").removeClass("accordian-band-color");
		$( "#collapseSix" ).prev().addClass("accordian-band-color");
		$(".custom-bg").removeClass("white");
	    $( "#collapseSix" ).prev().find('.custom-bg').addClass("white");
		$( ".panel-collapse" ).removeClass("in");
		$("#collapseSix").addClass( "in" );
		
		
		checkarraydiv();
		$('#basic_info_menu_6').addClass('active');
	}
	$('html, body').animate({scrollTop : 0},800);
	return false;

	e.preventDefault();


	
}
$(document).ready(function() {
	
	$("#tblacabasicinformation-contact_country").change(function() {
		var country = this.value;
		var contactstatehtml = '<input type="text" id="tblacabasicinformation-contact_state" class="form-control form-height" name="TblAcaBasicInformation[contact_state]" value="" maxlength="25" onkeypress="return alpha(event);">';
		var contactcity = '<input type="text" id="tblacabasicinformation-contact_city" class="form-control form-height" name="TblAcaBasicInformation[contact_city]" value="" maxlength="50" onkeypress="return alpha(event);">';
		var contactstatedropdownhtml = '<select id="tblacabasicinformation-contact_state" class="form-control form-height" name="TblAcaBasicInformation[contact_state]" onchange="statebasicChange(this.value);">'
+'<option value="">Select State</option>'
+'<option value="AL">AL</option>'
+'<option value="AK">AK</option>'
+'<option value="AZ">AZ</option>'
+'<option value="AR">AR</option>'
+'<option value="CA">CA</option>'
+'<option value="CO">CO</option>'
+'<option value="CT">CT</option>'
+'<option value="DE">DE</option>'
+'<option value="DC">DC</option>'
+'<option value="FL">FL</option>'
+'<option value="GA">GA</option>'
+'<option value="HI">HI</option>'
+'<option value="ID">ID</option>'
+'<option value="IL">IL</option>'
+'<option value="IN">IN</option>'
+'<option value="IA">IA</option>'
+'<option value="KS">KS</option>'
+'<option value="KY">KY</option>'
+'<option value="LA">LA</option>'
+'<option value="ME">ME</option>'
+'<option value="MD">MD</option>'
+'<option value="MA">MA</option>'
+'<option value="MI">MI</option>'
+'<option value="MN">MN</option>'
+'<option value="MS">MS</option>'
+'<option value="MO">MO</option>'
+'<option value="MT">MT</option>'
+'<option value="NE">NE</option>'
+'<option value="NV">NV</option>'
+'<option value="NH">NH</option>'
+'<option value="NJ">NJ</option>'
+'<option value="NM">NM</option>'
+'<option value="NY">NY</option>'
+'<option value="NC">NC</option>'
+'<option value="ND">ND</option>'
+'<option value="OH">OH</option>'
+'<option value="OK">OK</option>'
+'<option value="OR">OR</option>'
+'<option value="PA">PA</option>'
+'<option value="RI">RI</option>'
+'<option value="SC">SC</option>'
+'<option value="SD">SD</option>'
+'<option value="TN">TN</option>'
+'<option value="TX">TX</option>'
+'<option value="UT">UT</option>'
+'<option value="VT">VT</option>'
+'<option value="VA">VA</option>'
+'<option value="WA">WA</option>'
+'<option value="WV">WV</option>'
+'<option value="WI">WI</option>'
+'<option value="WY">WY</option>'
+'</select>';
		
		var contactcitydropdown = '<select id="tblacabasicinformation-contact_city" class="form-control form-height" name="TblAcaBasicInformation[contact_city]">'
+'<option value="">Select City</option>'
+'</select>';
		if(country != 'US')
		{
			$('.field-tblacabasicinformation-contact_state').html(contactstatehtml);
			$('.field-tblacabasicinformation-contact_city').html(contactcity);
			$('#tblacabasicinformation-contact_state').val('');
		$('#tblacabasicinformation-contact_city').val('');
			
		}
		else
		{
			$('.field-tblacabasicinformation-contact_state').html(contactstatedropdownhtml);
			$('.field-tblacabasicinformation-contact_city').html(contactcitydropdown);
			$('#tblacabasicinformation-contact_state').val('');
			
		}
		
		
		
	});
	
	$("input[name='TblAcaDesignatedGovtEntity[assign_dge]']").change(function() {
		
		$('.dge-clear').val('');
		$(".dge-clear-radio").attr("checked", false);
		$value = this.value;
		if ($value != 1) {
			$('.designation').hide();
		} else {
			$('.designation').show();
		}
	});

	$("input[name='TblAcaAggregatedGroup[is_other_entity]']").change(function() {
		
		$('#tblacaaggregatedgroup-total_1095_forms').val('');
		$value = this.value;
		if ($value != 1) {
			$('.other_entity_filling_yes').css("display","none");
		} else {
			$('.other_entity_filling_yes').css("display","block");
		}
	});
	$("input[name='TblAcaAggregatedGroup[is_ale_member]']").change(function() {
		$value = this.value;
		$('.aggregate-clear').val('');
		$(".aggregate-clear-radio").attr("checked", false);
		$("#entire_year").attr("checked", false);
		$(".specific_year").attr("checked", false);
		  $('.specific_year').prop("disabled", false);
		
		if ($value != 1) {
			$('.filling_forms').css("display","none");
		} else {
			$('.filling_forms').css("display","block");
		}
	});

	$("input[name='TblAcaPlanCriteria[hours_tracking_method]']").change(function() {
		$value = this.value;
		
		$('#tblacaplancriteria-initial_measurement_period').val('');
		$(".initialmeasurement-period-begin").attr("checked", false);
		
		if ($value != 1) {
			$('.initialmeasurement').hide();
		} else {
			$('.initialmeasurement').show();
		}
	});
	
	 $(".basic-information").click(function(){
		 
		 $(".basic-information").attr('disabled', 'disabled');
		 $('#basic_info_form').submit();
		 return true;
		 
	 });
	 
	 $(".emp-status").click(function(){
		 
		 $(".emp-status").attr('disabled', 'disabled');
		 $('#emp_status_form').submit();
		 return true;
		 
	 });
	 
	 $(".plan-offering").click(function(){
		 
		 $(".plan-offering").attr('disabled', 'disabled');
		 $('#plan_offering_form').submit();
		 return true;
		 
	 });
	 
	 $(".designated-entity").click(function(){
		 
		 $(".designated-entity").attr('disabled', 'disabled');
		 $('#designated_entity_form').submit();
		 return true;
		 
	 });
	 
	 $(".client-aggregated").click(function(){
		 
		 $(".client-aggregated").attr('disabled', 'disabled');
		 $('#client_aggregated_group').submit();
		 return true;
		 
	 });
	 
	 $(".client-anything").click(function(){
		 
		 $(".client-anything").attr('disabled', 'disabled');
		 $('#client_anything_alse').submit();
		 return true;
		 
	 });
	 
});

function isNumberKey(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

   return true;
}

function addnewrow(id) {
	
	$('#add_more_btn').html('Remove');
	$('#add_more_btn').removeClass("btn-primary");
	$('#add_more_btn').addClass("btn-danger");
	$('#add_more_btn').attr("onclick",'removerow('+id+');');
	$('#add_more_btn').attr("id",'remove_more_btn_'+id+'');
	
	var old_id = id;
	 id++;
	 $newrow = '<div class="row" id="row_' + id + '" style="margin-bottom:10px;"><div class="col-sm-3 padding-right-0 padding_left_30"><p>Group Name</p><input type="text" class="form-control add_more" name="TblAcaAggregatedGroupList['+id+'][group_name]" id="" placeholder=""></div>'
	   + "<div class='col-sm-3 padding-right-0 padding_left_30'><p>Group EIN</p><input type='text' class='form-control add_more phone' name='TblAcaAggregatedGroupList["+id+"][group_ein]' id='' placeholder=' ' data-inputmask='\"mask\": \"99-9999999\"' data-mask></div>"
	   + '<div class="col-sm-2 padding-left-5"><p>&nbsp;&nbsp;</p><button class="btn btn-primary no-wrap" type="button" id="add_more_btn" onclick="addnewrow('
	   + id + ');" id="">Add more</button></div></div>';

	 $($newrow).insertAfter("#row_"+ old_id);
	 dataMaskIntialise();
	
	}

function removerow(id) {
	$('#row_' + id).remove();
}
function disableyear() {
	if ($('#entire_year').is(':checked')) {

		$(".specific_year").attr("disabled", true);

	} else {

		$(".specific_year").attr("disabled", false);
	}
}

$(function() {

	$("[data-mask]").inputmask();

	$("#selected_others").click(function() {
		$("#tblacabasicadditionaldetail-others").val(''); 
		if ($('#selected_others').is(':checked')) {

			$(".others_comments").css("display","block")

		} else {

			$(".others_comments").css("display","none")
		}

	});

	$('.steps').hover(

	function() {
		$(this).css('background', '#000000');
		$(this).find('.check').css("display", "none");
		$(this).find('.edit').css("display", "block");
	},

	function() {
		$(this).css('background', 'rgb(14, 187, 121)');
		$(this).find('.check').css("display", "block");
		$(this).find('.edit').css("display", "none");
	});

});

function editbasic() {
	
	$('.basic_info_menu').removeClass('active');
	$('#basic_info_menu_1').addClass('active');
	
	$('.steps').css( "display", "none" );
	$('.fixed-number').css( "display", "block");
 	$(".parent-tabs").removeClass("accordian-band-color");
	$( "#collapseOne" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
    $( "#collapseOne" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	$("#collapseOne").addClass( "in" );
	
	window.location.hash = 'basicinformation';
	checkarraydiv();

}

function editbasic1() {
	$('.basic_info_menu').removeClass('active');
	$('#basic_info_menu_2').addClass('active');

	$('.steps').css( "display", "none" );
	$('.fixed-number').css( "display", "block");
 	$(".parent-tabs").removeClass("accordian-band-color");
	$( "#collapseTwo" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
    $( "#collapseTwo" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	$("#collapseTwo").addClass( "in" );
	
	window.location.hash = 'empstatustracking';
	checkarraydiv();

}


function editbasic2() {
	$('.basic_info_menu').removeClass('active');
	$('#basic_info_menu_3').addClass('active');

	$('.steps').css( "display", "none" );
	$('.fixed-number').css( "display", "block");
 	$(".parent-tabs").removeClass("accordian-band-color");
	$( "#collapseThree" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
    $( "#collapseThree" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	$("#collapseThree").addClass( "in" );
	
	window.location.hash = 'planofferingcriteria';
	checkarraydiv();

}

function editbasic3() {
	$('.basic_info_menu').removeClass('active');
	$('#basic_info_menu_4').addClass('active');

	$('.steps').css( "display", "none" );
	$('.fixed-number').css( "display", "block");
 	$(".parent-tabs").removeClass("accordian-band-color");
	$( "#collapseFour" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
    $( "#collapseFour" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	$("#collapseFour").addClass( "in" );
	
	window.location.hash = 'designatedgovtentity';
	checkarraydiv();

}

function editbasic4() {
	$('.basic_info_menu').removeClass('active');
	$('#basic_info_menu_5').addClass('active');

	$('.steps').css( "display", "none" );
	$('.fixed-number').css( "display", "block");
 	$(".parent-tabs").removeClass("accordian-band-color");
	$( "#collapseFive" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
    $( "#collapseFive" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	$("#collapseFive").addClass( "in" );
	
	window.location.hash = 'aggregatedgroup';
	checkarraydiv();

}

function editbasic5() {

	$('.basic_info_menu').removeClass('active');
	$('.steps').css( "display", "none" );
	$('.fixed-number').css( "display", "block");
 	$(".parent-tabs").removeClass("accordian-band-color");
	$( "#collapseSix" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
    $( "#collapseSix" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	$("#collapseSix").addClass( "in" );
	
	window.location.hash = 'anythingelse';
	checkarraydiv();
	
	
	
	$('#basic_info_menu_6').addClass('active');
}


 function statebasicChange($state){
	var value =$state;
	var datastr = '&value=' + value;
	  var csrfToken = $('meta[name="csrf-token"]').attr("content");
	  datastr += '&_csrf ='+csrfToken;
	  curl = staticurl3 + 'default/getcities'; 
	$('#tblacabasicinformation-contact_city').html('<option>Searching...</option>');
	  $.ajax({
			url : curl,
			type : "post",
			data : datastr,
			dataType : "json",
			success : function(data) {
				
			
				if(data != 'No cities found')
				{
				var length=Object.keys(data.success).length
				var i;
					if(data!=''){
						var html='';
						html +='<option>Select City</option>'
						for (i = 0; i < length; i++) {
                    	   html += '<option value='+ data.success[i].LocationId +'>'+ data.success[i].Cities +'</option>';
						}
						
						$('#tblacabasicinformation-contact_city').html(html);

						}else{
							toastr.error(data.fail)
						}
				}
				else
				{
					$('#tblacabasicinformation-contact_city').html('<option>No cities found</option>');
				}
			}
		});
		
}
