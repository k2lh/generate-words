<?php 
function clean($input) {
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );
 
    $output = preg_replace($search, '', $input);
    $output = str_replace('.', ',', $output);
    $output = str_replace(';', ',', $output);
    $output = str_replace(' ', ',', $output);
    $output = str_replace('/', ',', $output);
    $output = str_replace('`', ',', $output);
    $output = str_replace("'", ',', $output);
    $output = str_replace('"', ',', $output);
    $output = str_replace('&', ',', $output);
    $output = str_replace('=', ',', $output);
    $output = str_replace('?', ',', $output);
    return $output;
  }  
  
  function repthis($input) {
  $result = count($input);
  if (($result > 0) && ($result < 6)) {
  if ($result == 1) {
		$input2 = $input; 
		$input = array_merge($input, $input2);
		$input = array_merge($input, $input2);
		$input = array_merge($input, $input2);
		$input = array_merge($input, $input2);
		$input = array_merge($input, $input2);
		$input = array_merge($input, $input2);
 	 } elseif ($result == 2) {
		$input2 = $input; 
		$input = array_merge($input, $input2);
		$input = array_merge($input, $input2);
	 } else {
		$input2 = $input; 
		$input = array_merge($input, $input2);
	 }
  }
  return $input;   
}

if ($_GET) {
	if ($_GET['m']) {
		for ($i=1; $i<=4; $i++) {
			if ($_GET['vowelsing'.$i] && $_GET['consing'.$i]) {
			echo "<p><strong>language $i</strong><br />";
			echo "http://words.karinoyo.com/?pop=1&q1=";
			echo clean($_GET['vowelsing'.$i]);	
			echo '&q2='.clean($_GET['voweldbl'.$i]);	
			echo '&q3='.clean($_GET['consing'.$i]);	
			echo '&q4='.clean($_GET['condbl'.$i]);	
			echo '&q5='.clean($_GET['vowel'.$i]);	
			echo '&q6='.clean($_GET['vowelcon'.$i]);	
			echo '&q7='.clean($_GET['convowel'.$i]);	
			echo '&q8='.clean($_GET['convowelcon'.$i]);	
			echo '&q9='.clean($_GET['start'.$i]);	
			echo '&q10='.clean($_GET['end'.$i]);	
			echo '&q11='.clean($_GET['startvowelsing'.$i]);	
			echo '&q12='.clean($_GET['startvoweldbl'.$i]);	
			echo '&q13='.clean($_GET['startconsing'.$i]);	
			echo '&q14='.clean($_GET['startcondbl'.$i]);	
			echo '&q15='.clean($_GET['endvowelsing'.$i]);	
			echo '&q16='.clean($_GET['endvoweldbl'.$i]);	
			echo '&q17='.clean($_GET['endconsing'.$i]);
			echo '&q18='.clean($_GET['endcondbl'.$i]);
			echo "&q19=";
			$firstsyl = clean($_GET['firstsyl'.$i]);	
				foreach ($firstsyl as $key => $syl) {
				echo $syl.',';
				}
			echo "&q20=";
			$medsyl = clean($_GET['medsyl'.$i]);	
				foreach ($medsyl as $key => $syl) {
				echo $syl.',';
				}
			echo "&q21=";
			$finalsyl = clean($_GET['finalsyl'.$i]);	
				foreach ($finalsyl as $key => $syl) {
				echo $syl.',';
				}
			echo "</p>";
			} else { 
				break; 
			}
		} 
	} else {
			echo "http://words.karinoyo.com/?pop=1&q1=";
			echo clean($_GET['vowelsing']);	
			echo '&q2='.clean($_GET['voweldbl']);	
			echo '&q3='.clean($_GET['consing']);	
			echo '&q4='.clean($_GET['condbl']);	
			echo '&q5='.clean($_GET['vowel']);	
			echo '&q6='.clean($_GET['vowelcon']);	
			echo '&q7='.clean($_GET['convowel']);	
			echo '&q8='.clean($_GET['convowelcon']);	
			echo '&q9='.clean($_GET['start']);	
			echo '&q10='.clean($_GET['end']);	
			echo '&q11='.clean($_GET['startvowelsing']);	
			echo '&q12='.clean($_GET['startvoweldbl']);	
			echo '&q13='.clean($_GET['startconsing']);	
			echo '&q14='.clean($_GET['startcondbl']);	
			echo '&q15='.clean($_GET['endvowelsing']);	
			echo '&q16='.clean($_GET['endvoweldbl']);	
			echo '&q17='.clean($_GET['endconsing']);
			echo '&q18='.clean($_GET['endcondbl']);
			echo "&q19=";
			$firstsyl = clean($_GET['firstsyl']);	
				foreach ($firstsyl as $key => $syl) {
				echo $syl.',';
				}
			echo "&q20=";
			$medsyl = clean($_GET['medsyl']);	
				foreach ($medsyl as $key => $syl) {
				echo $syl.',';
				}
			echo "&q21=";
			$finalsyl = clean($_GET['finalsyl']);	
				foreach ($finalsyl as $key => $syl) {
				echo $syl.',';
				}
	}
}
?>
