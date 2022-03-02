<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>Belajar Array dan Tipe Data</h1>
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
    
</body>
</html>