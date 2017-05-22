<?php

$A=$_GET['PPP'];
if($A=="A"){
    if (isset($A)) {
        $x = $_GET['xx'];
        $y = $_GET['yy'];
        $r = $x + $y;
    }}
else if($A=="B") {
    if (isset($A)) {
        $x = $_GET['xx'];
        $y = $_GET['yy'];
        $r = $x - $y;
    }}
else if($A=="C") {
    if (isset($A)) {
        $x = $_GET['xx'];
        $y = $_GET['yy'];
        $r = $x * $y;
    }}
else if($A=="D") {
    if (isset($A)) {
        $x = $_GET['xx'];
        $y = $_GET['yy'];
        $r = $x / $y;
    }}
?>
<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>" />
    <select name="PPP" >
        <option  value="A" <?php if ($A=="A" ) echo "selected" ; ?> >+</option>
        <option  value="B" <?php if ($A=="B" ) echo "selected" ; ?> >-</option>
        <option  value="C" <?php if ($A=="C" ) echo "selected" ; ?> >x</option>
        <option  value="D" <?php if ($A=="D" ) echo "selected" ; ?> >/</option>
    </select>

    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php
    echo $r;
    ?>
</form>