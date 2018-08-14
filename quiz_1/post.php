<!-- <?php 

echo "Nilai 1 = " .($_POST ["nilai_1"]) ."<br>";
echo "Nilai 2 = " .($_POST ["nilai_2"]) ."<br>";
echo "Nilai 3 = " .($_POST ["nilai_3"]) ."<br>"."<br>";

$nilai_1 = $_POST["nilai_1"];
$nilai_2 = $_POST["nilai_2"];
$nilai_3 = $_POST["nilai_3"];

$hasil_1 = ($nilai_1 + $nilai_2) * $nilai_3;
echo "Hasil 1 = ($nilai_1 + $nilai_2) * $nilai_3 = " .$hasil_1 ."<br>";

$hasil_2 = ($nilai_1 * $nilai_2) / $nilai_3;
echo "Hasil 2 = ($nilai_1 * $nilai_2) / $nilai_3 = " .$hasil_2 ."<br>";

$hasil_3 = $nilai_1 / $nilai_3;
echo "Hasil 3 = $nilai_1 / $nilai_3 = " .$hasil_3 ."<br>" ."<br>";


if ($nilai_1 > $nilai_2){
	echo "Nilai Terbesar adalah = " ."$nilai_1";
}
	elseif ($nilai_1 > $nilai_3) {
		echo "Nilai Terbesar adalah = " ."$nilai_1";
	}
		elseif ($nilai_2 > $nilai_3) {
			echo "Nilai Terbesar adalah = " ."$nilai_2";
		}
			else {
				echo "Nilai Terbesar adalah = " ."$nilai_3 ";
			}

 ?> -->


 <!DOCTYPE html>
<html>

<body>
    <p align="center"> Tabel Perkalian </p>
    <?php

echo "<table border=1>";
for($i=1; $i <=3; $i++){
      echo "<tr>";
      for($j=1; $j<=5; $j++){
            echo "<td>";
            echo $i.$j;
            echo "</td>";
      }
}
echo "</table>";
?>
</body>
</html>