<?php
if (isset($_GET['yy'])) {
    $year = $_GET['yy'];
    $result = "西元{$year}年";
    $is_gap = false;
    if ($year % 4 == 0) {
        $is_gap = true;
        if ($year > 1752 && $year % 100 == 0) {
            $is_gap = false;
            if ($year % 400 == 0) {
                $is_gap = true;
                if ($year % 4000 == 0) {
                    $is_gap = false;
                }
            }
        }
    } else {
        $is_gap = false;
    }
    if ($is_gap) {
        $result = "$result" . "是閏年";
    } else {
        $result = "$result" . "不是閏年";
    }
}
?>
<form>
    西元<input type="text" name="yy" id="year"/>年
    <input type="submit" value="點選" />
</form>
<hr>
<p><?php echo $result; ?></p>