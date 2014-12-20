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
    <script src="scripts2.js"></script>
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
<body>
<header>
<h1>conlang word generator <span class="extra">2.0</span></h1>
        <a class="fright" href="../index.html">generator list</a>

<p>This one is long-hand, so you'll have to check your choices carefully to make sure there are no conflicts.
(The table won't automatically narrow down selections based on previous selections.)</p>
</header>
<section id="multiple">
<div id="linkshow1"></div>
<form>
      <div class="stepnav2">
        <input type="reset" class="button back" id="reset" value="clear values" />
        <input type="button" class="next button generate" id="generate2" value="generate links" />
    </div>

<table>
    <thead>
        <tr>
            <th class="ththree">item</th>
            <th class="ththree">language 1</th>
            <th class="ththree">language 2</th>
            <th class="ththree">language 3</th>
            <th class="ththree">language 4</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>SINGLE vowels</td>
            <td><input type="text" class="vowelsing" name="vowelsing1" id="vowelsing1" value=""></td>
            <td><input type="text" class="vowelsing" name="vowelsing2" id="vowelsing2" value=""></td>
            <td><input type="text" class="vowelsing" name="vowelsing3" id="vowelsing3" value=""></td>
            <td><input type="text" class="vowelsing" name="vowelsing4" id="vowelsing4" value=""></td>
        </tr>
        <tr>
            <td>PAIRED vowels</td>
            <td><input type="text" class="voweldbl" name="voweldbl1" id="voweldbl1" value=""></td>
            <td><input type="text" class="voweldbl" name="voweldbl2" id="voweldbl2" value=""></td>
            <td><input type="text" class="voweldbl" name="voweldbl3" id="voweldbl3" value=""></td>
            <td><input type="text" class="voweldbl" name="voweldbl4" id="voweldbl4" value=""></td>
        </tr>
        <tr>
            <td>SINGLE consonants</td>
            <td><input type="text" class="consing" name="consing1" id="consing1" value=""></td>
            <td><input type="text" class="consing" name="consing2" id="consing2" value=""></td>
            <td><input type="text" class="consing" name="consing3" id="consing3" value=""></td>
            <td><input type="text" class="consing" name="consing4" id="consing4" value=""></td>
        </tr>
        <tr>
            <td>PAIRED consonants</td>
            <td><input type="text" class="condbl" name="condbl1" id="condbl1" value=""></td>
            <td><input type="text" class="condbl" name="condbl2" id="condbl2" value=""></td>
            <td><input type="text" class="condbl" name="condbl3" id="condbl3" value=""></td>
            <td><input type="text" class="condbl" name="condbl4" id="condbl4" value=""></td>
        </tr>
        <tr>
            <td>Syllable patterns</td>
            <td>
                <label><input class="phonetic" name="vowel1" value="1" type="checkbox">Vowel + vowel</label>
                <label><input class="phonetic" name="vowelcon1" value="1" type="checkbox">Vowel + consonant</label>
                <label><input class="phonetic" name="convowel1" value="1" type="checkbox">Consonant + vowel</label>
                <label><input class="phonetic" name="convowelcon1" value="1" type="checkbox">Consonant + vowel + consonant</label>
            </td>
            <td>
                <label><input class="phonetic" name="vowel2" value="1" type="checkbox">Vowel + vowel</label>
                <label><input class="phonetic" name="vowelcon2" value="1" type="checkbox">Vowel + consonant</label>
                <label><input class="phonetic" name="convowel2" value="1" type="checkbox">Consonant + vowel</label>
                <label><input class="phonetic" name="convowelcon2" value="1" type="checkbox">Consonant + vowel + consonant</label>
            </td>
            <td>
                <label><input class="phonetic" name="vowel3" value="1" type="checkbox">Vowel + vowel</label>
                <label><input class="phonetic" name="vowelcon3" value="1" type="checkbox">Vowel + consonant</label>
                <label><input class="phonetic" name="convowel3" value="1" type="checkbox">Consonant + vowel</label>
                <label><input class="phonetic" name="convowelcon3" value="1" type="checkbox">Consonant + vowel + consonant</label>
            </td>
            <td>
                <label><input class="phonetic" name="vowel4" value="1" type="checkbox">Vowel + vowel</label>
                <label><input class="phonetic" name="vowelcon4" value="1" type="checkbox">Vowel + consonant</label>
                <label><input class="phonetic" name="convowel4" value="1" type="checkbox">Consonant + vowel</label>
                <label><input class="phonetic" name="convowelcon4" value="1" type="checkbox">Consonant + vowel + consonant</label>
            </td>
        </tr>
        <tr>
            <td>First letter of a <strong>word</strong></td>
            <td>
                <label><input type="radio" name="start1" value="1" />any vowel.</label>
                <label><input type="radio" name="start1" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="start1" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="start1" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="start1" value="5" />any consonant.</label>
                <label><input type="radio" name="start1" value="6" />specific consonant(s).</label>
            </td>
            <td>
                <label><input type="radio" name="start2" value="1" />any vowel.</label>
                <label><input type="radio" name="start2" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="start2" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="start2" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="start2" value="5" />any consonant.</label>
                <label><input type="radio" name="start2" value="6" />specific consonant(s).</label>
            </td>
            <td>
                <label><input type="radio" name="start3" value="1" />any vowel.</label>
                <label><input type="radio" name="start3" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="start3" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="start3" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="start3" value="5" />any consonant.</label>
                <label><input type="radio" name="start3" value="6" />specific consonant(s).</label>
            </td>
            <td>
                <label><input type="radio" name="start4" value="1" />any vowel.</label>
                <label><input type="radio" name="start4" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="start4" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="start4" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="start4" value="5" />any consonant.</label>
                <label><input type="radio" name="start4" value="6" />specific consonant(s).</label>
            </td>
        </tr>
        <tr>
            <td>SINGLE first-letter vowel(s)</td>
            <td><input type="text" name="startvowelsing1" id="startvowelsing1" value="" /></td>
            <td><input type="text" name="startvowelsing2" id="startvowelsing2" value="" /></td>
            <td><input type="text" name="startvowelsing3" id="startvowelsing3" value="" /></td>
            <td><input type="text" name="startvowelsing4" id="startvowelsing4" value="" /></td>
        </tr>
        </tr>
            <td>PAIRED first-letter vowel(s)</td>
            <td><input type="text" name="startvoweldbl1" id="startvoweldbl1" value="" /></td>
            <td><input type="text" name="startvoweldbl2" id="startvoweldbl2" value="" /></td>
            <td><input type="text" name="startvoweldbl3" id="startvoweldbl3" value="" /></td>
            <td><input type="text" name="startvoweldbl4" id="startvoweldbl4" value="" /></td>
        </tr>
        </tr>
            <td>SINGLE first-letter consonant(s)</td>
            <td><input type="text" name="startconsing1" id="startconsing1" value="" /></td>
            <td><input type="text" name="startconsing2" id="startconsing2" value="" /></td>
            <td><input type="text" name="startconsing3" id="startconsing3" value="" /></td>
            <td><input type="text" name="startconsing4" id="startconsing4" value="" /></td>
        </tr>
        </tr>
            <td>PAIRED first-letter consonant(s)</td>
            <td><input type="text" name="startcondbl1" id="startcondbl1" value="" /></td>
            <td><input type="text" name="startcondbl2" id="startcondbl2" value="" /></td>
            <td><input type="text" name="startcondbl3" id="startcondbl3" value="" /></td>
            <td><input type="text" name="startcondbl4" id="startcondbl4" value="" /></td>
        </tr>
        <tr>
            <td>Last letter of a <strong>word</strong></td>
            <td>
                <label><input type="radio" name="end1" value="1" />any vowel.</label>
                <label><input type="radio" name="end1" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="end1" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="end1" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="end1" value="5" />any consonant.</label>
                <label><input type="radio" name="end1" value="6" />specific consonant(s).</label>
            </td>
            <td>
                <label><input type="radio" name="end2" value="1" />any vowel.</label>
                <label><input type="radio" name="end2" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="end2" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="end2" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="end2" value="5" />any consonant.</label>
                <label><input type="radio" name="end2" value="6" />specific consonant(s).</label>
            </td>
            <td>
                <label><input type="radio" name="end3" value="1" />any vowel.</label>
                <label><input type="radio" name="end3" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="end3" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="end3" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="end3" value="5" />any consonant.</label>
                <label><input type="radio" name="end3" value="6" />specific consonant(s).</label>
            </td>
            <td>
                <label><input type="radio" name="end4" value="1" />any vowel.</label>
                <label><input type="radio" name="end4" value="2" />specific vowel(s).</label>
                <label><input type="radio" name="end4" value="3" />any vowel/consonant.</label>
                <label><input type="radio" name="end4" value="4" />specific vowel(s)/consonant(s).</label>
                <label><input type="radio" name="end4" value="5" />any consonant.</label>
                <label><input type="radio" name="end4" value="6" />specific consonant(s).</label>
            </td>
        </tr>
        <tr>
            <td>SINGLE last-letter vowel(s)</td>
            <td><input type="text" name="endvowelsing1" id="endvowelsing1" value="" /></td>
            <td><input type="text" name="endvowelsing2" id="endvowelsing2" value="" /></td>
            <td><input type="text" name="endvowelsing3" id="endvowelsing3" value="" /></td>
            <td><input type="text" name="endvowelsing4" id="endvowelsing4" value="" /></td>
        </tr>
        </tr>
            <td>PAIRED last-letter vowel(s)</td>
            <td><input type="text" name="endvoweldbl1" id="endvoweldbl1" value="" /></td>
            <td><input type="text" name="endvoweldbl2" id="endvoweldbl2" value="" /></td>
            <td><input type="text" name="endvoweldbl3" id="endvoweldbl3" value="" /></td>
            <td><input type="text" name="endvoweldbl4" id="endvoweldbl4" value="" /></td>
        </tr>
        </tr>
            <td>SINGLE last-letter consonant(s)</td>
            <td><input type="text" name="endconsing1" id="endconsing1" value="" /></td>
            <td><input type="text" name="endconsing2" id="endconsing2" value="" /></td>
            <td><input type="text" name="endconsing3" id="endconsing3" value="" /></td>
            <td><input type="text" name="endconsing4" id="endconsing4" value="" /></td>
        </tr>
        </tr>
            <td>PAIRED last-letter consonant(s)</td>
            <td><input type="text" name="endcondbl1" id="endcondbl1" value="" /></td>
            <td><input type="text" name="endcondbl2" id="endcondbl2" value="" /></td>
            <td><input type="text" name="endcondbl3" id="endcondbl3" value="" /></td>
            <td><input type="text" name="endcondbl4" id="endcondbl4" value="" /></td>
        </tr>
        <tr>
            <td>FIRST syllable construction</td>
            <td>
                <select id="firstsyl1" multiple="multiple" name="firstsyl1[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="firstsyl2" multiple="multiple" name="firstsyl2[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="firstsyl3" multiple="multiple" name="firstsyl3[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="firstsyl4" multiple="multiple" name="firstsyl4[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>FIRST syllable construction</td>
            <td>
                <select id="medsyl1" multiple="multiple" name="medsyl1[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="medsyl2" multiple="multiple" name="medsyl2[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="medsyl3" multiple="multiple" name="medsyl3[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="medsyl4" multiple="multiple" name="medsyl4[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>FIRST syllable construction</td>
            <td>
                <select id="finalsyl1" multiple="multiple" name="finalsyl1[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="finalsyl2" multiple="multiple" name="finalsyl2[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="finalsyl3" multiple="multiple" name="finalsyl3[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
            <td>
                <select id="finalsyl4" multiple="multiple" name="finalsyl4[]" title="">
                <option selected="selected" value="1">vowel</option>
                <option selected="selected" value="2">multivowel</option>
                <option selected="selected" value="12">vowel + multivowel</option>
                <option selected="selected" value="13">vowel + consonant</option>
                <option selected="selected" value="14">vowel + multiconsonant</option>
                <option selected="selected" value="23">multivowel + consonant</option>
                <option selected="selected" value="24">multivowel + multiconsonant</option>
                <option selected="selected" value="31">consonant + vowel</option>
                <option selected="selected" value="32">consonant + multivowel</option>
                <option selected="selected" value="41">multiconsonant + vowel</option>
                <option selected="selected" value="42">multiconsonant + multivowel</option>
                <option selected="selected" value="313">consonant + vowel + consonant</option>
                <option selected="selected" value="314">consonant + vowel + multiconsonant</option>
                <option selected="selected" value="323">consonant + multivowel + consonant</option>
                <option selected="selected" value="324">consonant + multivowel + multiconsonant</option>
                <option selected="selected" value="413">multiconsonant + vowel + consonant</option>
                <option selected="selected" value="414">multiconsonant + vowel + multiconsonant</option>
                <option selected="selected" value="423">multiconsonant + multivowel + consonant</option>
                <option selected="selected" value="424">multiconsonant + multivowel + multiconsonant</option>
                </select>
            </td>
        </tr>
        </tbody>
</table>
      <div class="stepnav">
        <input type="reset" class="button back" id="reset" value="clear values" />
        <input type="button" class="next button generate" id="generate1" value="generate links" />
    </div>
</form>
<div id="linkshow2"></div>
</section>


</body>
</html>
