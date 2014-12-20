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
	$phonetic1 = $_GET['vowel'];
	$phonetic2 = $_GET['vowelcon'];
	$phonetic3 = $_GET['convowel'];
	$phonetic4 = $_GET['convowelcon'];	
	$start = $_GET['start'];
	$end = $_GET['end'];

	$allvowel = clean($_GET['vowelsing']);
		if ($allvowel) {
			$allvowel = array_map('trim',explode(",",$allvowel));
			$allvowel = repthis($allvowel);
		}
	$allcons = clean($_GET['consing']);
		if ($allcons) {
			$allcons = array_map('trim',explode(",",$allcons));
			$allcons = repthis($allcons);
		}	

	if ($start == '4') {	
		$startvowelsing = clean($_GET['startvowelsing']);
			if ($startvowelsing) {
				$startvowelsing = array_map('trim',explode(",",$startvowelsing));
				$startvowelsing = repthis($startvowelsing);
			} 
		$startvoweldbl = clean($_GET['startvoweldbl']);
			if ($startvoweldbl) {
				$startvoweldbl = array_map('trim',explode(",",$startvoweldbl));
				$startvoweldbl = repthis($startvoweldbl);
			} 
		$startconsing = clean($_GET['startconsing']);
			if ($startconsing) {
				$startconsing = array_map('trim',explode(",",$startconsing));
				$startconsing = repthis($startconsing);
			} 
		$startcondbl = clean($_GET['startcondbl']);
			if ($startcondbl) {
				$startcondbl = array_map('trim',explode(",",$startcondbl));
				$startcondbl = repthis($startcondbl);
			} 
	} elseif ($start == '2') {	
		$startvowelsing = clean($_GET['startvowelsing']);
			if ($startvowelsing) {
				$startvowelsing = array_map('trim',explode(",",$startvowelsing));
				$startvowelsing = repthis($startvowelsing);
			} 
		$startvoweldbl = clean($_GET['startvoweldbl']);
			if ($startvoweldbl) {
				$startvoweldbl = array_map('trim',explode(",",$startvoweldbl));
				$startvoweldbl = repthis($startvoweldbl);
			} 
	} elseif ($start == '6') {	
		$startconsing = clean($_GET['startconsing']);
			if ($startconsing) {
				$startconsing = array_map('trim',explode(",",$startconsing));
				$startconsing = repthis($startconsing);
			} 
		$startcondbl = clean($_GET['startcondbl']);
			if ($startcondbl) {
				$startcondbl = array_map('trim',explode(",",$startcondbl));
				$startcondbl = repthis($startcondbl);
			} 
	}			
	
	if ($end == '4') {	
		$endvowelsing = clean($_GET['endvowelsing']);
			if ($endvowelsing) {
				$endvowelsing = array_map('trim',explode(",",$endvowelsing));
				$endvowelsing = repthis($endvowelsing);
			} 
		$endvoweldbl = clean($_GET['endvoweldbl']);
			if ($endvoweldbl) {
				$endvoweldbl = array_map('trim',explode(",",$endvoweldbl));
				$endvoweldbl = repthis($endvoweldbl);
			} 
		$endconsing = clean($_GET['endconsing']);
			if ($endconsing) {
				$endconsing = array_map('trim',explode(",",$endconsing));
				$endconsing = repthis($endconsing);
			} 
		$endcondbl = clean($_GET['endcondbl']);
			if ($endcondbl) {
				$endcondbl = array_map('trim',explode(",",$endcondbl));
				$endcondbl = repthis($endcondbl);
			} 
	} elseif ($end == '2') {	
		$endvowelsing = clean($_GET['endvowelsing']);
			if ($endvowelsing) {
				$endvowelsing = array_map('trim',explode(",",$endvowelsing));
				$endvowelsing = repthis($endvowelsing);
			} 
		$endvoweldbl = clean($_GET['endvoweldbl']);
			if ($endvoweldbl) {
				$endvoweldbl = array_map('trim',explode(",",$endvoweldbl));
				$endvoweldbl = repthis($endvoweldbl);
			} 
	} elseif ($end == '6') {	
		$endconsing = clean($_GET['endconsing']);
			if ($endconsing) {
				$endconsing = array_map('trim',explode(",",$endconsing));
				$endconsing = repthis($endconsing);
			} 
		$endcondbl = clean($_GET['endcondbl']);
			if ($endcondbl) {
				$endcondbl = array_map('trim',explode(",",$endcondbl));
				$endcondbl = repthis($endcondbl);
			} 
	}	
	
	$firstsyl = $_GET['firstsyl'];
	$medsyl = $_GET['medsyl'];
	$finalsyl = $_GET['finalsyl'];
	
	$voweldbl = clean($_GET['voweldbl']);
		if ($voweldbl) { $vwlpair = array_map('trim',explode(",",$voweldbl)); }
	
	$condbl = clean($_GET['condbl']);
		if ($condbl) { $conpair = array_map('trim',explode(",",$condbl)); }

echo '<h2>one syllable</h2><ul class="wordlistb">';

$m=1;
foreach ($firstsyl as $key => $syl) {
	if ($syl < 11) continue; 
	$list = str_split($syl);
	$x = count($list);
	if ($conpair) { shuffle($conpair); }
	if ($vwlpair) { shuffle($vwlpair); } 
	$wordlist[] = '';
	for($i=0; $i<=20; $i++){
		$b = 0;
		$a = 1;
		$word = '';
		foreach ($list as $key => $value) {
		shuffle($allvowel);
		shuffle($allcons);
		if ($startvowelsing) { shuffle($startvowelsing); }
		if ($endvowelsing) { shuffle($endvowelsing); }
		if ($startconsing) { shuffle($startconsing); }
		if ($endconsing) { shuffle($endconsing); }
		if ($startvoweldbl) { shuffle($startvoweldbl); }
		if ($endvoweldbl) { shuffle($endvoweldbl); }
		if ($startcondbl) { shuffle($startcondbl); }
		if ($endcondbl) { shuffle($endcondbl); }
			if ($value == 1) {
				if (($a == 1) && $startvowelsing) {
					$word .= $startvowelsing[0]; 
				} elseif (($a == $x) && $endvowelsing) {
					$word .= $endvowelsing[0];
				} else {
					if (!$allvowel) { $word .= '*'; } else { $word .= $allvowel[$b]; }
				}
				$b++; $a++; 
				if ($b > 4) { $b = 0; }
			} elseif ($value == 2) {
				if (($a == 1) && $startvoweldbl) {
					$word .= $startvoweldbl[0]; 
				} elseif (($a == $x) && $endvoweldbl) {
					$word .= $endvoweldbl[0];
				} else {
					if (!$vwlpair) { $word .= '*'; } else { $word .= $vwlpair[$b]; }	
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 3) {
				if (($a == 1) && $startconsing) {
					$word .= $startconsing[0]; 
				} elseif (($a == $x) && $endconsing) {
					$word .= $endconsing[0];
				} else {
					if (!$allcons) { $word .= '*'; } else { $word .= $allcons[$b]; }
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 4) {
				if (($a == 1) && $startcondbl) {
					$word .= $startcondbl[0]; 
				} elseif (($a == $x) && $endcondbl) {
					$word .= $endcondbl[0];
				} else {
					if (!$conpair) { $word .= '*'; } else { $word .= $conpair[$b]; }	
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			}
		}
		if (in_array($word, $wordlist)) { 
			} else { 
				$wordlist[] = $word;
				echo "<li>$word</li>"; 
			}
		$m = count($wordlist);
		if ($m > 39) break;
		}
	}

// print_r($wordlist);
echo '</ul><h2>two syllables</h2><ul class="wordlistb">';

$m = 1;
for($i=0; $i<=4; $i++){
foreach ($firstsyl as $key => $syl) {
	foreach ($finalsyl as $key => $end) {
		$twosyl = $syl.$end;
		$sylarr = str_split($twosyl);
		if ($conpair) { shuffle($conpair); }
		if ($vwlpair) { shuffle($vwlpair); } 
		$x = count($sylarr);
		$a = 1;
		$b = 0;
		if ($m > 60) break;
		echo '<li>';
		foreach ($sylarr as $key => $value) {
		shuffle($allvowel);
		shuffle($allcons);
		if ($startvowelsing) { shuffle($startvowelsing); }
		if ($endvowelsing) { shuffle($endvowelsing); }
		if ($startconsing) { shuffle($startconsing); }
		if ($endconsing) { shuffle($endconsing); }
		if ($startvoweldbl) { shuffle($startvoweldbl); }
		if ($endvoweldbl) { shuffle($endvoweldbl); }
		if ($startcondbl) { shuffle($startcondbl); }
		if ($endcondbl) { shuffle($endcondbl); }
			if ($value == 1) {
				if (($a == 1) && $startvowelsing) {
					echo $startvowelsing[0]; 
				} elseif (($a == $x) && $endvowelsing) {
					echo $endvowelsing[0];
				} else {
					if (!$allvowel) { echo '*'; } else { echo $allvowel[$b]; }
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 2) {
				if (($a == 1) && $startvoweldbl) {
					echo $startvoweldbl[0]; 
				} elseif (($a == $x) && $endvoweldbl) {
					echo $endvoweldbl[0];
				} else {
					if (!$vwlpair) { echo '*'; } else { echo $vwlpair[$b]; }	
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 3) {
				if (($a == 1) && $startconsing) {
					echo $startconsing[0]; 
				} elseif (($a == $x) && $endconsing) {
					echo $endconsing[0];
				} else {
					if (!$allcons) { echo '*'; } else { echo $allcons[$b]; }
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 4) {
				if (($a == 1) && $startcondbl) {
					echo $startcondbl[0]; 
				} elseif (($a == $x) && $endcondbl) {
					echo $endcondbl[0];
				} else {
					if (!$conpair) { echo '*'; } else { echo $conpair[$b]; }	
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			}
		}
		echo "</li>";
		$m++;
		}
	}
}
	
echo '</ul><h2>three syllables</h2><ul class="wordlistb">';

$m = 1;
for($i=0; $i<=2; $i++){
foreach ($firstsyl as $key => $syl) {
	foreach ($medsyl as $key => $mid) {
		foreach ($finalsyl as $key => $end) {
		$thrsyl = $syl.$mid.$end;
		$sylarr = str_split($thrsyl);
		if ($conpair) { shuffle($conpair); }
		if ($vwlpair) { shuffle($vwlpair); } 
		$x = count($sylarr);
		$a = 1;
		$b = 0;
		if ($m > 60) break;
		echo '<li>';
		foreach ($sylarr as $key => $value) {
		shuffle($allvowel);
		shuffle($allcons);
		if ($startvowelsing) { shuffle($startvowelsing); }
		if ($endvowelsing) { shuffle($endvowelsing); }
		if ($startconsing) { shuffle($startconsing); }
		if ($endconsing) { shuffle($endconsing); }
		if ($startvoweldbl) { shuffle($startvoweldbl); }
		if ($endvoweldbl) { shuffle($endvoweldbl); }
		if ($startcondbl) { shuffle($startcondbl); }
		if ($endcondbl) { shuffle($endcondbl); }
			if ($value == 1) {
				if (($a == 1) && $startvowelsing) {
					echo $startvowelsing[0]; 
				} elseif (($a == $x) && $endvowelsing) {
					echo $endvowelsing[0];
				} else {
					if (!$allvowel) { echo '*'; } else { echo $allvowel[$b]; }
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 2) {
				if (($a == 1) && $startvoweldbl) {
					echo $startvoweldbl[0]; 
				} elseif (($a == $x) && $endvoweldbl) {
					echo $endvoweldbl[0];
				} else {
					if (!$vwlpair) { echo '*'; } else { echo $vwlpair[$b]; }	
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 3) {
				if (($a == 1) && $startconsing) {
					echo $startconsing[0]; 
				} elseif (($a == $x) && $endconsing) {
					echo $endconsing[0];
				} else {
					if (!$allcons) { echo '*'; } else { echo $allcons[$b]; }
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			} elseif ($value == 4) {
				if (($a == 1) && $startcondbl) {
					echo $startcondbl[0]; 
				} elseif (($a == $x) && $endcondbl) {
					echo $endcondbl[0];
				} else {
					if (!$conpair) { echo '*'; } else { echo $conpair[$b]; }	
				}
				$b++; $a++;
				if ($b > 4) { $b = 0; }
			}
		}
		echo "</li>";
		$m++;	
		}
	}
}
}	
echo '</ul><h2>four syllables</h2><ul class="wordlistb">';

$m = 1;
$medsyl2 = $medsyl;
shuffle($medsyl2);
for($i=0; $i<=1; $i++){
foreach ($medsyl as $key => $mid) {
	foreach ($medsyl2 as $key => $mid2) {
		foreach ($firstsyl as $key => $syl) {
		if ($vwlpair) { shuffle($vwlpair); } 
		foreach ($finalsyl as $key => $end) {
		if ($conpair) { shuffle($conpair); }
			$thrsyl = $syl.$mid.$mid2.$end;
			$sylarr = str_split($thrsyl);
			$x = count($sylarr);
			$a = 1;
			$b = 0;
			if ($m > 60) break;
			echo '<li>';
			foreach ($sylarr as $key => $value) {
				shuffle($allvowel);
				shuffle($allcons);
				if ($startvowelsing) { shuffle($startvowelsing); }
				if ($endvowelsing) { shuffle($endvowelsing); }
				if ($startconsing) { shuffle($startconsing); }
				if ($endconsing) { shuffle($endconsing); }
				if ($startvoweldbl) { shuffle($startvoweldbl); }
				if ($endvoweldbl) { shuffle($endvoweldbl); }
				if ($startcondbl) { shuffle($startcondbl); }
				if ($endcondbl) { shuffle($endcondbl); }
				if ($value == 1) {
					if (($a == 1) && $startvowelsing) {
						echo $startvowelsing[0]; 
					} elseif (($a == $x) && $endvowelsing) {
						echo $endvowelsing[0];
					} else {
						if (!$allvowel) { echo '*'; } else { echo $allvowel[$b]; }
					}
					$b++; $a++;
					if ($b > 4) { $b = 0; }
				} elseif ($value == 2) {
					if (($a == 1) && $startvoweldbl) {
						echo $startvoweldbl[0]; 
					} elseif (($a == $x) && $endvoweldbl) {
						echo $endvoweldbl[0];
					} else {
						if (!$vwlpair) { echo '*'; } else { echo $vwlpair[$b]; }	
					}
					$b++; $a++;
					if ($b > 4) { $b = 0; }
				} elseif ($value == 3) {
					if (($a == 1) && $startconsing) {
						echo $startconsing[0]; 
					} elseif (($a == $x) && $endconsing) {
						echo $endconsing[0];
					} else {
						if (!$allcons) { echo '*'; } else { echo $allcons[$b]; }
					}
					$b++; $a++;
					if ($b > 4) { $b = 0; }
				} elseif ($value == 4) {
					if (($a == 1) && $startcondbl) {
						echo $startcondbl[0]; 
					} elseif (($a == $x) && $endcondbl) {
						echo $endcondbl[0];
					} else {
						if (!$conpair) { echo '*'; } else { echo $conpair[$b]; }	
					}
					$b++; $a++;
					if ($b > 4) { $b = 0; }
				}
				}
			echo "</li>";
			$m++;	
			}
		}
	}
}
echo '</ul>';
}
}
?>
