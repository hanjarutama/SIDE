<?php 

class Robot{

    private $warkepala;
    private $warbadan;
    private $warkaki;
    private $jumsenjata;

    public function __construct($warkepala, $warbadan, $warkaki, $jumsenjata){
        $this->warkepala = $warkepala;
        $this->warbadan = $warbadan;
        $this->warkaki = $warkaki;
        $this->jumsenjata = $jumsenjata;
    }

    public function getwarbadan(){
        return $this->warbadan ."<br>". $this->warkepala ."<br>". $this->warkaki ."<br>". $this->jumsenjata;

    }   

    public function changewarbadan($warkepala, $warbadan, $warkaki, $jumsenjata){
        $this->warkepala = $warkepala;
        $this->warbadan = $warbadan;
        $this->warkaki = $warkaki;
        $this->jumsenjata = $jumsenjata;
    }


}

$rob = new Robot("Merah", "Hitam", "Biru", 10);
echo $rob->getwarbadan();
echo "<br>";
echo "<br>";
$rob->changewarbadan("Hijau", "Coklat", "Kuning", 20);
echo $rob->getwarbadan();