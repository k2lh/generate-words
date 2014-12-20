$(function(){
		
	$('.vowelsing').change(function(){
		var sel = this.id;
		 $('#start' + sel).val($('#' + sel).val());
		 $('#end' + sel).val($('#' + sel).val());
		});		

	$('.consing').change(function(){
		var sel = this.id;
		 $('#start' + sel).val($('#' + sel).val());
		 $('#end' + sel).val($('#' + sel).val());
		});		
		
	$('.voweldbl').change(function(){
		var id = (this).id;
		var last = id.substr(id.length - 1);
		var voweldbl = $('#voweldbl' + last).val();  
		$('#startvoweldbl' + last).val($('#voweldbl' + last).val());
		$('#endvoweldbl' + last).val($('#voweldbl' + last).val());
		});		

	$('.condbl').change(function(){
		var id = (this).id;
		var last = id.substr(id.length - 1);
		var condbl = $('#condbl' + last).val();  
		$('#startcondbl' + last).val($('#condbl' + last).val());
		$('#endcondbl' + last).val($('#condbl' + last).val());
		});		

		$('.generate').click(function() {
			var ajax_load = "<img src='load.gif' alt='loading...' class='loader' />"; 
			var str = $("form").serialize();  
			$("#linkshow1").html(ajax_load).load("linkshow.php?m=y&" + str );
			$("#linkshow2").html(ajax_load).load("linkshow.php?m=y&" + str );
		});
	
	
});		
		

