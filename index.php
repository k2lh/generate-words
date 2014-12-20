<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>conlang word generator</title>
    <meta name="description" content="a generator for conlang words with specific patterns">
    <meta name="author" content="klhamilton">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="scripts.js"></script>
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
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

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

if ($_GET['pop']) {
$p = clean($_GET['pop']);
$vowelsing = clean($_GET['q1']);
$voweldbl = clean($_GET['q2']);
$consing = clean($_GET['q3']);
$condbl = clean($_GET['q4']);
$vowel = clean($_GET['q5']);
$vowelcon = clean($_GET['q6']);
$convowel = clean($_GET['q7']);
$convowelcon = clean($_GET['q8']);
$start = clean($_GET['q9']);
$end = clean($_GET['q10']);
$startvowelsing = clean($_GET['q11']);
$startvoweldbl = clean($_GET['q12']);
$startconsing = clean($_GET['q13']);
$startcondbl = clean($_GET['q14']);
$endvowelsing = clean($_GET['q15']);
$endvoweldbl = clean($_GET['q16']);
$endconsing = clean($_GET['q17']);
$endcondbl = clean($_GET['q18']);
$firstsyl = clean($_GET['q19']);
    $firstsyl = array_map('trim',explode(",",$firstsyl));
$medsyl = clean($_GET['q20']);
    $medsyl = array_map('trim',explode(",",$medsyl));
$finalsyl = clean($_GET['q21']);
    $finalsyl = array_map('trim',explode(",",$finalsyl));
} ?>

<body>
<header>
<h1>conlang word generator <span class="extra">2.0</span></h1>
        <a class="fright" href="../index.html">generator list</a>

</header>


<aside>
<form>
<div class="stepcontainer">
    <ul>
        <li class="<?php if (!$p) echo 'active'; ?>" id="step1">letters</li>
        <li class="" id="step2">patterns</li>
        <li class="<?php if ($p) echo 'active'; ?>" id="step3">syllables</li>

    </ul>
</div>

<div id="step1_div" class="steps <?php if ($p) echo 'hidden'; ?>">
    <h2>Start with letters.</h2>
    <p>For each question, enter letters separated by commas. To weight a certain letter, add it two or more times, ie: "A,A,A,E,I" or "C,C,C,D,G".
    You can have only paired or repeating letters, by leaving the SINGLE fields blank.</p>

    <fieldset class="alt">
        <label for="vowelsing">List SINGLE vowels</label>
        <input type="text" name="vowelsing" id="vowelsing" value="<?php if ($vowelsing) echo $vowelsing; ?>" placeholder="ex: A,E,I, etc">
    </fieldset>

    <fieldset class="">
        <label for="voweldbl">List DOUBLED vowels</label>
        <input type="text" name="voweldbl" id="voweldbl" value="<?php if ($voweldbl) echo $voweldbl; ?>" placeholder="ex: AA,EE,IE,OU, etc">
    </fieldset>

    <fieldset class="alt">
        <label for="consing">List SINGLE consonants</label>
        <input type="text" name="consing" id="consing" placeholder="ex: S,D,F,G, etc" value="<?php if ($consing) echo $consing; ?>" />
    </fieldset>

    <fieldset class="">
        <label for="condbl">List DOUBLED consonants</label>
        <input type="text" name="condbl" id="condbl" placeholder="ex: SS,DD,FF,TH,PH,NG, etc" value="<?php if ($condbl) echo $condbl; ?>" />
    </fieldset>

    <div class="stepnav">
        <input type="button" class="next step2" id="step2next" value="pick patterns" />
    </div>

</div>
<div id="step2_div" class="steps hidden">
    <h2>Next, choose patterns.</h2>
    <p>If you want words to begin or end only with specific letters, select the "specific" option. Additional
    fields will appear, pre-populated with the selections you made on the last page. Edit as you like.</p>

        <fieldset class="" id="groupphonetic">
            <label for="phonetic">Syllable patterns<span class="req">*</span></label>
                <label><input class="phonetic" name="vowel" <?php if ($vowel) echo ' checked="checked"'; ?> value="1" type="checkbox">Vowel + vowel (eg: <u>ea</u>&middot;ger, bur&middot;<u>eau</u>)</label>
                <label><input class="phonetic" name="vowelcon" <?php if ($vowelcon) echo ' checked="checked"'; ?> value="1" type="checkbox">Vowel + consonant (eg: <u>ex</u>&middot;press, walk&middot;<u>ing</u>)</label>
                <label><input class="phonetic" name="convowel" <?php if ($convowel) echo ' checked="checked"'; ?> value="1" type="checkbox">Consonant + vowel (eg: <u>di</u>&middot;rect, re&middot;<u>vue</u>)</label>
                <label><input class="phonetic" name="convowelcon" <?php if ($convowelcon) echo ' checked="checked"'; ?> value="1" type="checkbox">Consonant + vowel + consonant (eg: <u>con</u>&middot;duct, de&middot;<u>sign</u>)</label>
        </fieldset>

        <fieldset class="alt">
            <label for="start">The first letter of a <strong>word</strong> is...<span class="req">*</span></label>
            <div id="vowelstartopt">
                <label><input type="radio" name="start" <?php if ($start == 1) echo ' checked="checked"'; ?> value="1" />any vowel.</label>
                <label><input type="radio" name="start" <?php if ($start == 2) echo ' checked="checked"'; ?> value="2" />specific vowel(s).</label>
            </div>
            <div id="bothstartopt">
                <label><input type="radio" name="start" <?php if ($start == 3) echo ' checked="checked"'; ?> value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="start" <?php if ($start == 4) echo ' checked="checked"'; ?> value="4" />specific vowel(s)/consonant(s).</label>
            </div>
            <div id="constartopt">
                <label><input type="radio" name="start" <?php if ($start == 5) echo ' checked="checked"'; ?> value="5" />any consonant.</label>
                <label><input type="radio" name="start" <?php if ($start == 6) echo ' checked="checked"'; ?> value="6" />specific consonant(s).</label>
            </div>
        </fieldset>

        <div id="startlimit1">
            <fieldset class="">
            <label for="startvowelsing">SINGLE first-letter vowel(s):</label>
                <input type="text" name="startvowelsing" id="startvowelsing" value="<?php if ($startvowelsing) echo $startvowelsing; ?>" />
            </fieldset>
            <fieldset class="alt">
            <label for="startvoweldbl">DOUBLED first-letter vowel(s):</label>
                <input type="text" name="startvoweldbl" id="startvoweldbl" value="<?php if ($startvoweldbl) echo $startvoweldbl; ?>" />
            </fieldset>
        </div>

        <div id="startlimit2">
            <fieldset class="">
            <label for="startconsing">SINGLE first-letter consonant(s):</label>
                <input type="text" name="startconsing" id="startconsing" value="<?php if ($startconsing) echo $startconsing; ?>" />
            </fieldset>
            <fieldset class="alt">
            <label for="startcondbl">DOUBLED first-letter consonant(s):</label>
                <input type="text" name="startcondbl" id="startcondbl" value="<?php if ($startcondbl) echo $startcondbl; ?>" />
            </fieldset>
        </div>

        <fieldset class="">
            <label for="end">The last letter of a <strong>word</strong> is...<span class="req">*</span></label>
            <div id="vowelendopt">
                <label><input type="radio" name="end" <?php if ($end == 1) echo ' checked="checked"'; ?> value="1" />any vowel.</label>
                <label><input type="radio" name="end" <?php if ($end == 2) echo ' checked="checked"'; ?> value="2" />specific vowel(s).</label>
            </div>
            <div id="bothendopt">
                <label><input type="radio" name="end" <?php if ($end == 3) echo ' checked="checked"'; ?> value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="end" <?php if ($end == 4) echo ' checked="checked"'; ?> value="4" />specific vowel(s)/consonant(s).</label>
            </div>
            <div id="conendopt">
                <label><input type="radio" name="end" <?php if ($end == 5) echo ' checked="checked"'; ?> value="5" />any consonant.</label>
                <label><input type="radio" name="end" <?php if ($end == 6) echo ' checked="checked"'; ?>  value="6" />specific consonant(s).</label>
            </div>
        </fieldset>
        <div id="endlimit1">
            <fieldset class="">
            <label for="endvowelsing">SINGLE last-letter vowel(s):</label>
                <input type="text" name="endvowelsing" id="endvowelsing" value="<?php if ($endvowelsing) echo $endvowelsing; ?>" />
            </fieldset>
            <fieldset class="alt">
            <label for="endvoweldbl">DOUBLED last-letter vowel(s):</label>
                <input type="text" name="endvoweldbl" id="endvoweldbl" value="<?php if ($endvoweldbl) echo $endvoweldbl; ?>" />
            </fieldset>
        </div>

        <div id="endlimit2">
            <fieldset class="">
            <label for="endconsing">SINGLE last-letter consonant(s):</label>
                <input type="text" name="endconsing" id="endconsing" value="<?php if ($endconsing) echo $endconsing; ?>" />
            </fieldset>
            <fieldset class="alt">
            <label for="endcondbl">DOUBLED last-letter consonant(s):</label>
                <input type="text" name="endcondbl" id="endcondbl" value="<?php if ($endcondbl) echo $endcondbl; ?>" />
            </fieldset>
        </div>


   <div class="stepnav">
         <input type="button" class="next steps" id="step3next" value="pick syllables" />
    </div>

</div>
<div id="step3_div" class="steps <?php if (!$p) echo 'hidden'; ?>">
        <h2>Now for syllables.</h2>
    <p>You must choose AT LEAST ONE for each (first, middle, last syllables) or your results will error out. <strong>If there's nothing here, it's because you skipped the earlier steps.</strong></p>

    <div id="res_syllables">
<?php

if ($p) { ?>

<fieldset class="alt"><label for="firstsyl">How are <strong>FIRST</strong> syllables constructed?</label>
<select id="firstsyl" multiple="multiple" name="firstsyl[]" title="all first syllable constructions">
<option value="1" <?php if (in_array(1, $firstsyl)) echo 'selected="selected" '; ?>>vowel</option>
<option value="2" <?php if (in_array(2, $firstsyl)) echo 'selected="selected" '; ?>>multi-vowel</option>
<option value="12" <?php if (in_array(12, $firstsyl)) echo 'selected="selected" '; ?>>vowel + multi-vowel</option>
<option value="13" <?php if (in_array(13, $firstsyl)) echo 'selected="selected" '; ?>>vowel + consonant</option>
<option value="14" <?php if (in_array(14, $firstsyl)) echo 'selected="selected" '; ?>>vowel + multi-consonant</option>
<option value="23" <?php if (in_array(23, $firstsyl)) echo 'selected="selected" '; ?>>multi-vowel + consonant</option>
<option value="24" <?php if (in_array(24, $firstsyl)) echo 'selected="selected" '; ?>>multi-vowel + multi-consonant</option>
<option value="31" <?php if (in_array(31, $firstsyl)) echo 'selected="selected" '; ?>>consonant + vowel</option>
<option value="32" <?php if (in_array(32, $firstsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel</option>
<option value="41" <?php if (in_array(41, $firstsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel</option>
<option value="313" <?php if (in_array(313, $firstsyl)) echo 'selected="selected" '; ?>>consonant + vowel + consonant</option>
<option value="314" <?php if (in_array(314, $firstsyl)) echo 'selected="selected" '; ?>>consonant + vowel + multi-consonant</option>
<option value="323" <?php if (in_array(323, $firstsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel + consonant</option>
<option value="324" <?php if (in_array(324, $firstsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel + multi-consonant</option>
<option value="413" <?php if (in_array(413, $firstsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel + consonant</option>
<option value="414" <?php if (in_array(414, $firstsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel + multi-consonant</option>
<option value="423" <?php if (in_array(423, $firstsyl)) echo 'selected="selected" '; ?>>multi-consonant + multi-vowel + consonant</option>
<option value="424" <?php if (in_array(424, $firstsyl)) echo 'selected="selected" '; ?>>multi-consonant + multi-vowel + multi-consonant</option>
</select></fieldset>

<fieldset class=""><label for="medsyl">How are <strong>MIDDLE</strong> syllables constructed?</label>
<select id="medsyl" multiple="multiple" name="medsyl[]" title="all middle syllable constructions">
<option value="1" <?php if (in_array(1, $medsyl)) echo 'selected="selected" '; ?>>vowel</option>
<option value="2" <?php if (in_array(2, $medsyl)) echo 'selected="selected" '; ?>>multi-vowel</option>
<option value="12" <?php if (in_array(12, $medsyl)) echo 'selected="selected" '; ?>>vowel + multi-vowel</option>
<option value="13" <?php if (in_array(13, $medsyl)) echo 'selected="selected" '; ?>>vowel + consonant</option>
<option value="14" <?php if (in_array(14, $medsyl)) echo 'selected="selected" '; ?>>vowel + multi-consonant</option>
<option value="23" <?php if (in_array(23, $medsyl)) echo 'selected="selected" '; ?>>multi-vowel + consonant</option>
<option value="24" <?php if (in_array(24, $medsyl)) echo 'selected="selected" '; ?>>multi-vowel + multi-consonant</option>
<option value="31" <?php if (in_array(31, $medsyl)) echo 'selected="selected" '; ?>>consonant + vowel</option>
<option value="32" <?php if (in_array(32, $medsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel</option>
<option value="41" <?php if (in_array(41, $medsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel</option>
<option value="313" <?php if (in_array(313, $medsyl)) echo 'selected="selected" '; ?>>consonant + vowel + consonant</option>
<option value="314" <?php if (in_array(314, $medsyl)) echo 'selected="selected" '; ?>>consonant + vowel + multi-consonant</option>
<option value="323" <?php if (in_array(323, $medsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel + consonant</option>
<option value="324" <?php if (in_array(324, $medsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel + multi-consonant</option>
<option value="413" <?php if (in_array(413, $medsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel + consonant</option>
<option value="414" <?php if (in_array(414, $medsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel + multi-consonant</option>
<option value="423" <?php if (in_array(423, $medsyl)) echo 'selected="selected" '; ?>>multi-consonant + multi-vowel + consonant</option>
<option value="424" <?php if (in_array(424, $medsyl)) echo 'selected="selected" '; ?>>multi-consonant + multi-vowel + multi-consonant</option>

</select></fieldset>

<fieldset class="alt"><label for="finalsyl">How are <strong>LAST</strong> syllables constructed?</label>
<select id="finalsyl" multiple="multiple" name="finalsyl[]" title="all final syllable constructions">
<option value="1" <?php if (in_array(1, $finalsyl)) echo 'selected="selected" '; ?>>vowel</option>
<option value="2" <?php if (in_array(2, $finalsyl)) echo 'selected="selected" '; ?>>multi-vowel</option>
<option value="12" <?php if (in_array(12, $finalsyl)) echo 'selected="selected" '; ?>>vowel + multi-vowel</option>
<option value="13" <?php if (in_array(13, $finalsyl)) echo 'selected="selected" '; ?>>vowel + consonant</option>
<option value="14" <?php if (in_array(14, $finalsyl)) echo 'selected="selected" '; ?>>vowel + multi-consonant</option>
<option value="23" <?php if (in_array(23, $finalsyl)) echo 'selected="selected" '; ?>>multi-vowel + consonant</option>
<option value="24" <?php if (in_array(24, $finalsyl)) echo 'selected="selected" '; ?>>multi-vowel + multi-consonant</option>
<option value="31" <?php if (in_array(31, $finalsyl)) echo 'selected="selected" '; ?>>consonant + vowel</option>
<option value="32" <?php if (in_array(32, $finalsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel</option>
<option value="41" <?php if (in_array(41, $finalsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel</option>
<option value="313" <?php if (in_array(313, $finalsyl)) echo 'selected="selected" '; ?>>consonant + vowel + consonant</option>
<option value="314" <?php if (in_array(314, $finalsyl)) echo 'selected="selected" '; ?>>consonant + vowel + multi-consonant</option>
<option value="323" <?php if (in_array(323, $finalsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel + consonant</option>
<option value="324" <?php if (in_array(324, $finalsyl)) echo 'selected="selected" '; ?>>consonant + multi-vowel + multi-consonant</option>
<option value="413" <?php if (in_array(413, $finalsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel + consonant</option>
<option value="414" <?php if (in_array(414, $finalsyl)) echo 'selected="selected" '; ?>>multi-consonant + vowel + multi-consonant</option>
<option value="423" <?php if (in_array(423, $finalsyl)) echo 'selected="selected" '; ?>>multi-consonant + multi-vowel + consonant</option>
<option value="424" <?php if (in_array(424, $finalsyl)) echo 'selected="selected" '; ?>>multi-consonant + multi-vowel + multi-consonant</option>

</select></fieldset>
<?php } ?>

    </div>

      <div class="stepnav">
         <input type="button" class="next button" id="generate" value="generate" />
    </div>

    </div>
    </form>

</aside>

<section>
<div id="results">
<?php if ($p) { ?>
    <p>Everything's been entered, so all you have to do is click GENERATE.</p>
    <p>NOTE: if you go back a step to 'patterns' (using the tabs at top), you'll need to click something, even if you're just turning it on/off. Otherwise
    the values remain hidden. They're there; it's just that using the link-feature bypasses the automatic display and hiding based on your selections. Just click something on/off
    and it'll all show up. Then you can edit and return to the final tab to re-generate with changes.</p>
    <p>When you generate or re-generate, a new link will appear at the bottom of this page for you to use in the future or to share.</p>
<?php } else { ?>
<p>To create words for your conlang, we're going to consider words by their syllables. In a multi-syllabic word, the word will have a
<strong>FIRST</strong> syllable, a <strong>MIDDLE</strong> syllable (or several middles), and a <strong>LAST</strong> syllable. </p>
<p>You can have a consonant that only shows up in a pair, like if 'S' and 'X' only appear paired with other consonants. If you don't enter 'S' or 'X' as single consonants, they'd
never show up alone in a word. ALSO: this generator ignores the English rule of a silent vowel, like the 'e' at the end of 'where'. For good results: enter at least 3 vowels and ten consonants.
For even better results, enter at least three pairs of double-consonants and double-vowels,
in any combination (repeating or paired).
<p>One-syllable words will use the <strong>FIRST</strong> pattern, two syllable words will
    use the <strong>FIRST</strong> and <strong>LAST</strong> patterns. Words with three or more syllables will use <strong>FIRST</strong> +
    <strong>MIDDLE</strong> + <strong>LAST</strong>, repeating <strong>MIDDLE</strong> as needed.</p>
<p>For each question, select as many options as apply. </p>
<p>You can use the tabs at top to navigate, too.</p>
<p>To create settings for up to four languages at once, <a href="multiple.php">click here</a>. These will create links for separate queries.</p>
<hr>
<p>You'll see something here when you've finished all your selections & clicked on "generate".</p>
<?php } ?>
</div>

</section>

<div id="linkshow"></div>

</body>
</html>
