<!DOCTYPE html>
<html>

<body>
    <p align="center"> Tabel Perkalian </p>
    <table border="1" align="center">
        
        <?php for($baris=1; $baris<=10; $baris++){
            echo "<tr>";
            for($kolom=1; $kolom<=10; $kolom++) {
                echo "<td>";
                    echo "$kolom x $baris = ".($kolom * $baris);
                echo "</td>";
            }
            
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>