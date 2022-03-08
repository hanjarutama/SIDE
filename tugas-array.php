<?php
$perkenalan = [
  'nama' => ['Hildan','Hanjar','Utama'],
  'tinggal' => 'Surabaya',
  'kuliah' => ['univ' => 'Universitas Dinamika', 'jurusan' => 'S1 Sistem Informasi'],
  'hobi' => ['Olahraga', 'Musik']
];

echo "  Perkenalkan nama saya ".$perkenalan['nama'][0]." ".$perkenalan['nama'][1]." ".$perkenalan['nama'][2]; 
echo ", biasa dipanggil ".$perkenalan['nama'][0];
echo ". Saya tinggal di ".$perkenalan['tinggal'];
echo ", <br>dan saat ini saya tengah menempuh pendidikan  ".$perkenalan['kuliah']['jurusan'];
echo "  di  ".$perkenalan['kuliah']['univ'];
echo ", <br>Hobi saya sehari - hari adalah ".$perkenalan['hobi'][0];
echo ", dan mendengarkan ".$perkenalan['hobi'][1];
?>