<h2>Tugas Looping</h2>
<?php 

    $data = [
        ['nama' => 'Celine', 'mat' => 89, 'indo' => 95],
        ['nama' => 'Sandi', 'mat' => 65, 'indo' => 87],
        ['nama' => 'Bagus', 'mat' => 100, 'indo' => 78],
        ['nama' => 'Satria', 'mat' => 95, 'indo' => 95],
        ['nama' => 'Amelia', 'mat' => 92, 'indo' => 86],
        ['nama' => 'Ajib', 'mat' => 38, 'indo' => 79],
        ['nama' => 'Daffa', 'mat' => 59, 'indo' => 67],
        ['nama' => 'Deasy', 'mat' => 66, 'indo' => 90],
        ['nama' => 'Alvina', 'mat' => 100, 'indo' => 54],
        ['nama' => 'Azril', 'mat' => 88, 'indo' => 88]
    ];


    foreach ($data as $x) {
        echo $x['nama'];
        echo '<br>';
        if ($x['indo']>=80 && $x['indo']<=100) {
            echo "Nilai Bahasa Indonesia A";
        } else if($x['indo']>=60 && $x['indo']<=79){
            echo "Nilai Bahasa Indonesia B";
        } else if($x['indo']>0 && $x['indo']<=59){
            echo "Nilai Bahasa Indonesia C";
        } else{
            echo "Nilai Bahasa Indonesia belum masuk";
        }
        echo '<br>';
        if ($x['mat']>=80 && $x['mat']<=100) {
            echo "Nilai Matematika A";
        } else if($x['mat']>=60 && $x['mat']<=79){
            echo "Nilai Matematika B";
        } else if($x['mat']>0 && $x['mat']<=59){
            echo "Nilai Matematika C";
        } else{
            echo "Nilai Matematika belum masuk";
        }
        echo '<br>';
        echo '<br>';
    }

?>