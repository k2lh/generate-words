<link rel="stylesheet" href="scripts/jquery.asmselect.css">
<script src="scripts/jquery.asmselect.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("select[multiple]").asmSelect({
				addItemTarget: 'bottom',
				animate: false,
				highlight: true,
				sortable: false
			}); 
			
	
		});		
	</script>
<?php

if ($_GET) {
//	print_r ($_GET);	
//	echo "<br>";
	
	$phonetic1 = $_GET['phonetic1'];
		if ($phonetic1 === "undefined" ) { $phonetic1 = ''; }
	$phonetic2 = $_GET['phonetic2'];
		if ($phonetic2 === "undefined") { $phonetic2 = ''; }
	$phonetic3 = $_GET['phonetic3'];
		if ($phonetic3 === "undefined") { $phonetic3 = ''; }
	$phonetic4 = $_GET['phonetic4'];
		if ($phonetic4 === "undefined") { $phonetic4 = ''; }
		
	$start = $_GET['start'];
		if ($start < 3) { $start = 1; }
		elseif ($start > 4) { $start = 2; }
		else { $start = 3; }
		
	$end = $_GET['end'];
		if ($end < 3) { $end = 1; }
		elseif ($end > 4) { $end = 2; }
		else { $end = 3; }
		
	$voweldbl = $_GET['voweldbl'];
	$condbl = $_GET['condbl'];
	$vowelsing = $_GET['vowelsing'];
	$consing = $_GET['consing'];

		if ($vowelsing) { $vowelsing = 1; }
		if ($voweldbl) { $dblvowel = 1; }
		if ($consing) { $consing = 1; }
		if ($condbl) { $dblcons = 1; }
			
echo '<fieldset class="alt"><label for="firstsyl">How are <strong>FIRST</strong> syllables constructed?</label>';
echo '<select id="firstsyl" multiple="multiple" name="firstsyl[]" title="all first syllable constructions">';

	if (($start !== 2) && $phonetic1) {
		if ($vowelsing) {
			echo '<option selected="selected" value="1">vowel</option>';
			} 
		if ($dblvowel) { 
			echo '<option selected="selected" value="2">multi-vowel</option>';
			}
		if ($dblvowel && $vowelsing) { 
			echo '<option selected="selected" value="12">vowel + multi-vowel</option>';
			}
	}
	
	if (($start !== 2) && $phonetic2) {
		if ($vowelsing && $consing) { 
			echo '<option selected="selected" value="13">vowel + consonant</option>';
		}
		if ($vowelsing && $dblcons) { 
			echo '<option selected="selected" value="14">vowel + multi-consonant</option>';
		} 
		if ($dblvowel && $consing) { 
			echo '<option selected="selected" value="23">multi-vowel + consonant</option>';
		} 
		if ($dblvowel && $dblcons) { 
			echo '<option selected="selected" value="24">multi-vowel + multi-consonant</option>';
		} 
	}
	
	
	if (($start > 1) && $phonetic3) {
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="31">consonant + vowel</option>';
		}
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="32">consonant + multi-vowel</option>';
		} 
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="41">multi-consonant + vowel</option>';
		} 
		if ($dblvowel && $dblcons) {
		echo '<option selected="selected" value="42">multi-consonant + multi-vowel</option>';
		} 
	} 

	if (($start > 1) && $phonetic4) {
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="313">consonant + vowel + consonant</option>';
		}
		if ($vowelsing && $consing && $dblcons) {
			echo '<option selected="selected" value="314">consonant + vowel + multi-consonant</option>';
		}
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="323">consonant + multi-vowel + consonant</option>';
		} 
		if ($consing && $dblvowel && $dblcons) {
			echo '<option selected="selected" value="324">consonant + multi-vowel + multi-consonant</option>';
		}
		if ($consing && $vowelsing && $dblcons) {
			echo '<option selected="selected" value="413">multi-consonant + vowel + consonant</option>';
		}
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="414">multi-consonant + vowel + multi-consonant</option>';
		}
		if ($dblvowel && $consing && $dblcons) {
			echo '<option selected="selected" value="423">multi-consonant + multi-vowel + consonant</option>';
		}
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="424">multi-consonant + multi-vowel + multi-consonant</option>';
		} 
	} 

	echo '</select></fieldset><fieldset class=""><label for="medsyl">How are <strong>MIDDLE</strong> syllables constructed?</label>';
	echo '<select id="medsyl" multiple="multiple" name="medsyl[]" title="all middle syllable constructions">';
	if ($phonetic1) { 
		if ($vowelsing) {
			echo '<option selected="selected" value="1">vowel</option>';
		}
		if ($dblvowel) {
			echo '<option selected="selected" value="2">multi-vowel</option>';
		}
		if ($vowelsing && $dblvowel) {
			echo '<option selected="selected" value="12">vowel + multi-vowel</option>';
		} 
	} 
	
	if ($phonetic2) { 
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="13">vowel + consonant</option>';
		}
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="14">vowel + multi-consonant</option>';
		}
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="23">multi-vowel + consonant</option>';
		}
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="24">multi-vowel + multi-consonant</option>';
		} 
	}
	
	if ($phonetic3) { 
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="31">consonant + vowel</option>';
		}
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="32">consonant + multi-vowel</option>';
		}
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="41">multi-consonant + vowel</option>';
		}
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="42">multi-consonant + multi-vowel</option>';
		} 
	}
	
	if ($phonetic4) { 
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="313">consonant + vowel + consonant</option>';
		}
		if ($vowelsing && $consing && $dblcons) {
			echo '<option selected="selected" value="314">consonant + vowel + multi-consonant</option>';
		} 
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="323">consonant + multi-vowel + consonant</option>';
		}
		if ($dblvowel && $consing && $dblcons) {
			echo '<option selected="selected" value="324">consonant + multi-vowel + multi-consonant</option>';
		}
		if ($vowelsing && $consing && $dblcons) {
			echo '<option selected="selected" value="413">multi-consonant + vowel + consonant</option>';
		}
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="414">multi-consonant + vowel + multi-consonant</option>';
		}
		if ($dblvowel && $consing && $dblcons) {
			echo '<option selected="selected" value="423">multi-consonant + multi-vowel + consonant</option>';
		}
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="424">multi-consonant + multi-vowel + multi-consonant</option>';
		} 
	} 	

echo '</select></fieldset><fieldset class="alt"><label for="finalsyl">How are <strong>LAST</strong> syllables constructed?</label>';
echo '<select id="finalsyl" multiple="multiple" name="finalsyl[]" title="all final syllable constructions">';

	if ($phonetic1 && ($end !== 2)) { 
		if ($vowelsing) {
			echo '<option selected="selected" value="1">vowel</option>';
		}
		if ($dblvowel) {
			echo '<option selected="selected" value="2">multi-vowel</option>';
		}
		if ($vowelsing && $dblvowel) {
			echo '<option selected="selected" value="12">vowel + multi-vowel</option>';
		} 
	} 
	
	if ($phonetic2 && ($end > 1 )) { 
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="13">vowel + consonant</option>';
		}
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="14">vowel + multi-consonant</option>';
		}
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="23">multi-vowel + consonant</option>';
		}
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="24">multi-vowel + multi-consonant</option>';
		} 
	} 
	
	if ($phonetic3 && ($end !== 2)) { 
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="31">consonant + vowel</option>';
		}
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="32">consonant + multi-vowel</option>';
		} 
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="41">multi-consonant + vowel</option>';
		} 
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="42">multi-consonant + multi-vowel</option>';
		} 
	}
	
	if ($phonetic4 && ($end > 1)) { 
		if ($vowelsing && $consing) {
			echo '<option selected="selected" value="313">consonant + vowel + consonant</option>';
		}
		if ($vowelsing && $consing && $dblcons) {
			echo '<option selected="selected" value="314">consonant + vowel + multi-consonant</option>';
		} 
		if ($dblvowel && $consing) {
			echo '<option selected="selected" value="323">consonant + multi-vowel + consonant</option>';
		} 
		if ($dblvowel && $consing && $dblcons) {
			echo '<option selected="selected" value="324">consonant + multi-vowel + multi-consonant</option>';
		} 
		if ($vowelsing && $consing && $dblcons) {
			echo '<option selected="selected" value="413">multi-consonant + vowel + consonant</option>';
		} 
		if ($vowelsing && $dblcons) {
			echo '<option selected="selected" value="414">multi-consonant + vowel + multi-consonant</option>';
		} 
		if ($dblvowel && $consing && $dblcons) {
			echo '<option selected="selected" value="423">multi-consonant + multi-vowel + consonant</option>';
		} 
		if ($dblvowel && $dblcons) {
			echo '<option selected="selected" value="424">multi-consonant + multi-vowel + multi-consonant</option>';
		} 
	}
	echo '</select></fieldset>'; 	
} else {
	header('location:index.php');
} ?>
