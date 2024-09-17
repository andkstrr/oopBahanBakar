<?php

class Shell {
    protected $ppn;
    private $shellSuper,
            $shellVPower,
            $shellPowerDiesel,
            $shellPowerNitro;
    public $jumlah, $jenis;

    function __construct() {
        $this->ppn = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->shellSuper = $tipe1;
        $this->shellVPower = $tipe2;
        $this->shellPowerDiesel = $tipe3;
        $this->shellPowerNitro = $tipe4;
    }

    public function getHarga() {
        $harga["shellSuper"] = $this->shellSuper;
        $harga["shellVPower"] = $this->shellVPower;
        $harga["shellPowerDiesel"] = $this->shellPowerDiesel;
        $harga["shellPowerNitro"] = $this->shellPowerNitro;
        return $harga;
    }
}

class Beli extends Shell {
    public function hargaBeli() {
        $dataHarga = $this->getHarga();         
    }

    public function hargaPerLiter() {
        $get1 = $this->getHarga();
        $hargaPerLiter = $get1[$this->jenis];
        return $hargaPerLiter;
    }
    
    public function hargaDasar() {
        $hargaNormal = $this->jumlah * $this->hargaPerLiter();
        return $hargaNormal;
    }

    public function hargaPPN() {
        $hargaPPN = $this->hargaDasar() * $this->ppn;
        return $hargaPPN;
    }

    public function totalHarga() {
        $total = $this->hargaDasar() + $this->hargaPPN();
        return $total;
    }

    public function cetakPembelian() {
        echo "<center><div class='mt-3 alert alert-primary'>";
        echo "<b><h5>Bukti Transaksi Pembelian</b></h5><br>";
        echo "Jenis Bahan Bakar : " . "<b>" . $this->jenis . "</b>" . "<br>";
        echo "Jumlah Liter : " . "<b>" . $this->jumlah . " ℓ </b><br>";
        echo "Harga per Liter : " . "<b> Rp. " . number_format($this->hargaPerLiter(), 0, '', '.') . "</b><br>";
        echo "Harga Dasar : " . "<b> Rp. " . number_format($this->hargaDasar(), 0, '', '.') . "</b><br>";
        echo "PPN (10%) : " . "<b> Rp. " . number_format($this->hargaPPN(), 0, '', '.') . "</b><br><br>";
        echo "Total yang harus anda bayar : <b> Rp. " . number_format($this->totalHarga(), 0, '', '.') . "</b><br>";
        echo "</div>";
    }
}

