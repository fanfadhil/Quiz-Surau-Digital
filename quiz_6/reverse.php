<!DOCTYPE html>
<html>
<body>


<?php
 
$str = "setyagus sucipto sedang makan";
$ubah = array_reverse(explode(' ',$str));
$str = join(' ',$ubah);
echo $str;

?>

</body>
</html>
