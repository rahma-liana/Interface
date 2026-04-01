<?php
require_once 'pembayaran.php';
require_once 'cetak.php';

// Penggunaan Class qris
class qris extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Pembayaran qris Rp {$this->jumlah} berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk qris: Rp {$this->jumlah}";
    }
}
?>