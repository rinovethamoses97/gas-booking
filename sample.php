
<!DOCTYPE html>
<html>
<body>

<?php
$date1=date_create("2017-08-15");
$date2=date_create("2017-08-25");
$diff=date_diff($date1,$date2);
echo $diff->format("%a days");
?>

</body>
</html>