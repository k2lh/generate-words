$(function(){
		
	   $("#offstate1").hide();
		$('.switch1').click(function(){
			if ($('.switch1:checked').val() ) {
				$("#offstate1").slideDown();
			} else {
				$("#offstate1").slideUp();
			}
		});		

	   $("#offstate2").hide();
		$('.switch2').click(function(){
			if ($('.switch2:checked').val() ) {
				$("#offstate2").slideDown();
			} else {
				$("#offstate2").slideUp();
			}
		});		

	$('#consing').change(function(){
		 $('#startconsing').val($('#consing').val());
		 $('#endconsing').val($('#consing').val());
		});		

	$('#vowelsing').change(function(){
		 $('#startvowelsing').val($('#vowelsing').val());
		 $('#endvowelsing').val($('#vowelsing').val());
		});		
	
	$('#voweldbl').change(function(){
		var voweldbl = $('#voweldbl').val();  
		$('#startvoweldbl').val($('#voweldbl').val());
		$('#endvoweldbl').val($('#voweldbl').val());
		});		

	$('#condbl').change(function(){
		var condbl = $('#condbl').val();  
		$('#startcondbl').val($('#condbl').val());
		$('#endcondbl').val($('#condbl').val());
		});		

	$('#step2_div').change(function() {
		var ajax_load = "<img src='img/load2.gif' alt='loading...' class='center' />"; 
		var vowel = $('input:checkbox[name=vowel]:checked').val();
		var vowelcon = $('input:checkbox[name=vowelcon]:checked').val();
		var convowel = $('input:checkbox[name=convowel]:checked').val();
		var convowelcon = $('input:checkbox[name=convowelcon]:checked').val();
		var start = $('input:radio[name=start]:checked').val();
		var end = $('input:radio[name=end]:checked').val();
			
		if ( vowel || vowelcon ) {
			$("#vowelstartopt").fadeIn("slow");
			} else {
			$("#vowelstartopt").hide();
		}
		if ( convowel || convowelcon ) {
			$("#constartopt").fadeIn("slow");
			} else {
			$("#constartopt").hide();
		}		
		if (( vowel || vowelcon ) && ( convowel || convowelcon )) {
			$("#bothstartopt").fadeIn("slow");
			}	else {
			$("#bothstartopt").hide();
		}	
		if ( convowelcon || vowelcon ) {
			$("#conendopt").fadeIn("slow");
			} else {
			$("#conendopt").hide();
		}
		if ( convowel || vowel ) {
			$("#vowelendopt").fadeIn("slow");
			} else {
			$("#vowelendopt").hide();
		}		
		if (( convowelcon || vowelcon ) && ( convowel || vowel )) {
			$("#bothendopt").fadeIn("slow");
			}	else {
			$("#bothendopt").hide();
		}
		
		if ( start == '2') {
			$("#startlimit1").fadeIn("slow");
			} else {
			$("#startlimit1").hide();
		}
				
		if ( start == '6') {
			$("#startlimit2").fadeIn("slow");
			} else {
			$("#startlimit2").hide();
		}

		if ( start == '4') {
			$("#startlimit1").fadeIn("slow");
			$("#startlimit2").fadeIn("slow");
			}
		
		if ( end == '2') {
			$("#endlimit1").fadeIn("slow");
			} else {
			$("#endlimit1").hide();
		}
				
		if ( end == '6') {
			$("#endlimit2").fadeIn("slow");
			} else {
			$("#endlimit2").hide();
		}

		if ( end == '4') {
			$("#endlimit1").fadeIn("slow");
			$("#endlimit2").fadeIn("slow");
			}
	});

		$('#step3next').click(function() {
			$("#step3_div").fadeIn();
			$("#step3_div").siblings(".steps").hide();
			$("li#step3").addClass('active');
			$("li#step3").siblings().removeClass("active");
			var ajax_load = "<img src='load.gif' alt='loading...' class='loader' />"; 
			var end = $('input:radio[name=end]:checked').val();
			var start = $('input:radio[name=start]:checked').val();
			var phonetic1 = $("input:checkbox[name=vowel]:checked" ).val();
			var phonetic2 = $("input:checkbox[name=vowelcon]:checked" ).val();
			var phonetic3 = $("input:checkbox[name=convowel]:checked" ).val();
			var phonetic4 = $("input:checkbox[name=convowelcon]:checked" ).val();
			var vowelsing = $('#vowelsing').val();  
			var consing = $('#consing').val();  
			var voweldbl = $('#voweldbl').val();  
			var condbl = $('#condbl').val();  
			$("#res_syllables").html(ajax_load).load("proc_syllables.php?end=" + end + "&start=" + start + "&phonetic1=" + phonetic1 + "&phonetic2=" + phonetic2 + "&phonetic3=" + phonetic3 + "&phonetic4=" + phonetic4 + "&voweldbl=" + voweldbl + "&condbl=" + condbl + "&vowelsing=" + vowelsing + "&consing=" + consing );
		});
		
		$('#generate').click(function() {
			var ajax_load = "<img src='load.gif' alt='loading...' class='loader' />"; 
			var str = $("form").serialize();  
			$("#results").html(ajax_load).load("results.php?" + str );
			$("#linkshow").html(ajax_load).load("linkshow.php?" + str );
		});

   $('#step1').click(function() {
   		var selection = this.id;
   	//	alert(selection);
    	$("#" + selection + "_div").fadeIn();
		$("#" + selection + "_div").siblings(".steps").hide();
		$("li#" + selection).addClass('active');
		$("li#" + selection).siblings().removeClass("active");
		return false; 
    });

  $('#step2').click(function() {
   		var selection = this.id;
   	//	alert(selection);
    	$("#" + selection + "_div").fadeIn();
		$("#" + selection + "_div").siblings(".steps").hide();
		$("li#" + selection).addClass('active');
		$("li#" + selection).siblings().removeClass("active");
		return false; 
    });
 
  $('#step2next').click(function() {
   		var selection = this.id;
   	//	alert(selection);
    	$("#step2_div").fadeIn();
		$("#step2_div").siblings(".steps").hide();
		$("li#step2").addClass('active');
		$("li#step2").siblings().removeClass("active");
		return false; 
    });

  
  $('#step3').click(function() {
   		var selection = this.id;
   	//	alert(selection);
    	$("#" + selection + "_div").fadeIn();
		$("#" + selection + "_div").siblings(".steps").hide();
		$("li#" + selection).addClass('active');
		$("li#" + selection).siblings().removeClass("active");
		return false; 
    });
   
});		
		

