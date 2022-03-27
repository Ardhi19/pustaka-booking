<?php
class latihan1 extends CI_controller
{
    public function index()
    {
        echo "selamat Datang ... selamat belajar web programing";
        //$this ->load ->view('view - latihan');
    }

    public function penjumlahan ($n1, $n2)
    {
        $this ->load ->model('Model_latihan1');
        $hasil = $this ->Model_latihan1 ->jumlah($n1, $n2);
        echo "Hasil penjumlahan dari".$n1 . "+" .$n2 . "="
        .$hasil;
    }
}
