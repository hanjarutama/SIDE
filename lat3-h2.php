<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 2</title>
</head>
<body>
    <h1>Belajar Array dan Tipe Data dan Operasi aritmatika</h1>
    <br><br>
    <h2>Latihan 1</h2>
<?php
    // pembuatan array
        $coba = array (
                "umur"=>21,
                "nama"=>"Hildan",
                'gpa'=>3.85,);

        $coba2 = array(21,"Hildan",3.85);
        
    // pengaksesan array
        echo $coba["umur"]; 
        echo "<br />";
        echo $coba["nama"]; 
        echo "<br />";
        echo $coba['gpa'];

        echo "<br />";
        echo "<br />";

        echo "Nama Saya ".$coba2[1]." umur saya ".$coba2[0]." dan saya memiliki IPK ".$coba2[2];
        ?>
        <br><br>
        <h2>Latihan 2</h2>
<?php
    // operator aritmatika
        $a = 4;
        $b = 8;
        $c = 5;
        $d =10;

        $bagi = $b / $a ;
        $sisa = $b % $a ;
        $hasil= $bagi > $sisa;

    // hasil operator
        echo $a++; 
        echo "<br />";
        echo $a--; 
        echo "<br />";
        echo $a+=5; 
        echo "<br />";
        echo $a**=2; 
        echo "<br />";
        echo $a.=" adalah hasil kuadrat"; 
        echo "<br />";
        echo "<br />";
        echo $bagi; 
        echo "<br />";
        echo $sisa; 
        echo "<br />";
        echo "$bagi > $sisa: $hasil";
        echo "<br />";
        
        echo "c = $c, d = $d.";
        echo "<br>";
        if ($c=5 AND $d =10)
        {
        echo "Benar <br>";
        }else{
        echo "Salah";
        }
        
        ?>
<br><br>
    <h2>Latihan Percabangan</h2>
        <?php
        echo "<h4>NO 1</h4><br>"; 
            $nilai = 84;
            
            echo "Nilai = ".$nilai."<br>";  
            if ($nilai>=80) {
                echo "Anda Mendapatkan Nilai A";
            }elseif($nilai >=60){
                echo "Anda Mendapatkan Nilai B";
            }else{
                echo "Anda Mendapatkan Nilai C";
            }
            echo "<br><br><br><br>";
            echo "<h4>NO 2</h4><br>"; 

            $mesin = "bagus";
            $body = "jelek";

            echo "Mesin ".$mesin."<br>";
            echo "Body ".$body."<br>";

            if($mesin == "bagus"){
                if($body == "bagus"){
                    echo "Kondisi Mobil Bagus";
                } elseif($body == "jelek") {
                    echo "Kondisi Mobil Menengah";
                }
            } elseif($mesin == "jelek"){
                if($body == "bagus"){
                    echo "Kondisi Mobil menengah";
                } else {
                    echo "Kondisi Mobil Jelek";
                }
            }
            echo "<br><br><br><br>";

        ?>

        
    
</body>
</html>