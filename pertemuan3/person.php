<?php

class person {
    public $nama;
    public $kelas;
    public $nim;

    public function __construct($nama, $kelas, $nim) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->nim = $nim;
    }

    public function cetakInformasi() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Kelas: " . $this->kelas . "<br>";
        echo "NIM: " . $this->nim . "<br>";
    }

    public function gantiNama($namaBaru) {
        $this->nama = $namaBaru;
    }

    public function perbaruiKelas($kelasBaru) {
        $this->kelas = $kelasBaru;
    }

    public function perbaruiNIM($nimBaru) {
        $this->nim = $nimBaru;
    }

    public function informasiPendek() {
        return "Nama: " . $this->nama . ", Kelas: " . $this->kelas . ", NIM: " . $this->nim;
    }
}


$ihsan = new person('Muhammad Sultan Ihsan','TI09','0110222004');

// Cetak informasi dari objek $ihsan
echo "Nama: " . $ihsan->nama . "<br>";
echo "Kelas: " . $ihsan->kelas . "<br>";
echo "NIM: " . $ihsan->nim . "<br>";

$ihsan->cetakInformasi();

// Cetak informasi awal
echo "Informasi awal:<br>";
$ihsan->cetakInformasi();

// Mengganti NIM
$ihsan->perbaruiNIM('0110222005');

// Cetak informasi setelah mengganti NIM
echo "<br>Informasi setelah mengganti NIM:<br>";
$ihsan->cetakInformasi();



