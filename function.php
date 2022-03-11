<?php

class Order{

    private $nama, $harga;

    //setter
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function sumDiscount($amount, $discount)
    {
        $discount = ($amount * $discount/100);
        $afterdiscount = $amount - $discount;


        
        return "Harga Setelah Diskon : ".$amount." Diskon ".$discount." Menjadi ".$afterdiscount;
    }
    
    public function deletePesanan()
    {
        $this-> name = null;
        $this-> sumDiscount = null;
    }
   
}