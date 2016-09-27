  function alpha(e) {
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
  }
  
  
 $(function () {
        $(".price").keydown(function (event) {


            if (event.shiftKey == true) {
                event.preventDefault();
            }

            if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190 || event.keyCode == 110) {

            } else {
                event.preventDefault();
            }
            
            if($(this).val().indexOf('.') !== -1 && (event.keyCode == 190 || event.keyCode == 110))
                event.preventDefault();

        });
    });
	
function disableyear(){
	$(".specific_year").attr("checked", false);
	if($('#entire_year').is(':checked')) { 
			
		   $(".specific_year").attr("disabled", true);

		    }else{
	
		    	 $(".specific_year").attr("disabled", false);
			    }
}

function disableyear1(){
	$(".specific_year1").attr("checked", false);
	if($('#entire_year1').is(':checked')) { 

		   $(".specific_year1").attr("disabled", true);

		    }else{

		    	 $(".specific_year1").attr("disabled", false);
			    }
}

$(document).ready(function(){
	
	 $(".coverage-type-btn").click(function(){
		 
		 $(".coverage-type-btn").attr('disabled', 'disabled');
		 $('#coverage-type').submit();
		 return true;
		 
	 });
	 
	 $(".coverage-type-offerred-btn").click(function(){
		 
		 $(".coverage-type-offerred-btn").attr('disabled', 'disabled');
		 $('#coverage-type-offerred').submit();
		 return true;
		 
	 });
	 
	 $(".emp-cont-btn").click(function(){
		 
		 $(".emp-cont-btn").attr('disabled', 'disabled');
		 $('#emp-cont').submit();
		 return true;
		 
	 })
	 

	$('#benefit_plan_info_menu_main').addClass('active');
	$('#benefit_plan_info_menu_3').addClass('active');



	
	$("input[name='TblAcaPlanCoverageType[plantype]']").change(function(){
	
	$('.reset-coverage-type').val('').change();
	$('.reset-coverage-type-radio').attr("checked",false);
	$('#combination_div3').hide();
	$value = this.value;
	if($value != 1 && $value != 5)
	{
		document.querySelectorAll('[name="TblAcaPlanCoverageType[doh]"]')[0].checked = true; 
		$('#combination_div2').show();
		$('#combination_div1').hide();
	}
	else if($value == 5){

	$('#combination_div1').show();
	$('#combination_div2').hide();
	}
	else
	{
		$('#combination_div1').hide();
		$('#combination_div2').hide();
	}
	
	});


	$("input[name='TblAcaPlanCoverageType[doh]']").click(function(){
		$value = this.value;
		if($value == 9)
		{
			$('#combination_div3').show();
		}
		else
		{
			$('#combination_div3').hide();
			
		}
		
		});
		
		
		
		$("input[name='TblAcaPlanCoverageTypeOffered[spouse_essential_coverage]']").change(function(){
		$value = this.value;
		$('.spouse-conditional-coverage-radio').attr("checked",false);
		if($value == 1)
		{
			$('#spouse_conditional_coverage_div').removeClass('hide');
		}
		else
		{
			$('#spouse_conditional_coverage_div').addClass('hide');;
			
		}
		
		});

		$("input[name='TblAcaEmpContributions[employee_plan_contribution]']").change(function(){
		$value = this.value;
		$('.reset-emp-contribution').val('').change();
		if($value == 1)
		{
			$('#lowest_cost_div').show();
		}
		else
		{
			$('#lowest_cost_div').hide();
			
		}
		
		});

	
		
		$("input[name='TblAcaPlanCoverageTypeOffered[employee_essential_coverage]']").change(function(){
		$(".specific_year1").attr("checked", false);
		$("#entire_year1").attr("checked", false);
		$value = this.value;
		if($value != 2)
		{
			
			$('.years2').show();
		}
		else
		{
			$('.years2').hide();
			
			
		}
		
		});
		
		$("input[name='TblAcaPlanCoverageTypeOffered[employee_mv_coverage]']").change(function(){
		
		$(".specific_year").attr("checked", false);
		$("#entire_year").attr("checked", false);
		$value = this.value;
		if($value != 2)
		{
			$('.years1').show();
			
		}
		else
		{
			
			$('.years1').hide();
			
			
		}
		
		});
});
$(function() {

	$( ".custom-bg" ).click(function() {

		console.log(this);
		  //alert( "Handler for .click() called." );
		});
		

		$('.steps').hover(
				
               function () {
				   $(this).css('background','#000000');
                  $( this ).find('.check').css( "display", "none" );
  $( this ).find('.edit').css( "display", "block" );
               }, 
				
               function () {
				   $(this).css('background','rgb(14, 187, 121)');
                  $( this ).find('.check').css( "display", "block" );
  $( this ).find('.edit').css( "display", "none" );
               }
            );
			
			
		


});



function editbasic(){
	

	$(".parent-tabs").removeClass("accordian-band-color");
	$("#collapseOne" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
	$( "#collapseOne" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseOne").addClass("in");
	$("#collapseOne").css("height","auto");
	$("#collapseOne").removeClass("collapsed");
	$("#collapseOne").attr("aria-expanded","true");
	checkarraydiv();
	 window.location.hash = 'coveragetypewaitingperiod';
	
}
function editbasic1(){
	
	$(".parent-tabs").removeClass("accordian-band-color");
	$("#collapseTwo" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
	$( "#collapseTwo" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseTwo").addClass("in");
	$("#collapseTwo").css("height","auto");
	$("#collapseTwo").removeClass("collapsed");
	$("#collapseTwo").attr("aria-expanded","true");
	
	checkarraydiv();
	window.location.hash = 'typeofcoverage';
}

function editbasic2(){
	
		
	$(".parent-tabs").removeClass("accordian-band-color");
	$("#collapseThree" ).prev().addClass("accordian-band-color");
	$(".custom-bg").removeClass("white");
	$( "#collapseThree" ).prev().find('.custom-bg').addClass("white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseThree").addClass("in");
	$("#collapseThree").css("height","auto");
	$("#collapseThree").removeClass("collapsed");
	$("#collapseThree").attr("aria-expanded","true");
	
	checkarraydiv();
	window.location.hash = 'empcontributions';
}