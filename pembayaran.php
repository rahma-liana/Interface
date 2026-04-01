<?php
#Penggunaan Abstract Class
abstract class pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    // method wajib
    abstract public function prosesPembayaran();

    // method umum
    public function validasi() {
        return $this->jumlah > 0;
    }
}
?>