<?php 
print_r($_POST);

echo "Nama = " .($_POST ["nama"]) ."<br>" ."<br>";
echo "TTL = " .($_POST ["ttl"]) ."<br>" ."<br>";
echo "Alamat = " .($_POST ["alamat"]) ."<br>" ."<br>";

// $jumlah = count($_POST["hobi"]);
// echo "Hobi = ";
// for($i=0; $i<$jumlah; $i++){
//            echo $_POST["hobi"][$i] ." " ;
// }

// if($jumlah == 1){
// 	if($_POST["hobi"][0] == "Membaca"){
// 		echo "Librarian";
// 	} elseif($_POST["hobi"][0] == "Main Game"){
// 			echo "Gamers";		
// 		} elseif (($_POST["hobi"][0] == "Hiking")) {
// 			echo "Petualang";
// 		}

// }
// if ($jumlah == 2) {
// 	if($_POST["hobi"][0] == "Main Game" && $_POST["hobi"][1] == "Hiking"){
// 		echo "Petualang";
// 	}
// }
// if ($jumlah == 3) {
// 	if($_POST["hobi"][0] == "Membaca" && $_POST["hobi"][1] == "Main Game" && $_POST["hobi"][2] == "Hiking"){
// 		echo "Jagoan";
// 	}
// }

$Membaca = false;
$MainGame = false;
$Hiking = false;
$CHECK = $_POST["hobi"];

for($i=0; $i<sizeof($_POST["hobi"]); $i++){
	if($CHECK[$i] == "Membaca"){
		$Membaca=true;
	}elseif($CHECK[$i] == "MainGame"){
		$MainGame=true;

	}elseif($CHECK[$i] == "Hiking"){
		$Hiking=true;

	}
} echo "membaca = " .$Membaca ." ";
		echo "main game = " .$MainGame ." ";
		echo "hiking = " .$Hiking;

		if($Membaca == 1 && $MainGame == 1 && $Hiking == 1){
			echo "Jagoan";
		}elseif ($MainGame == 1 && $Hiking == 1) {
			echo "Petualang";
		}elseif ($Membaca == 1) {
			echo "Librarian";
		}


 ?>