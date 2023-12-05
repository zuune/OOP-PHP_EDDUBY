<?php 

// Pertemuan 1 - Pengenalan Class, Object

class Coba {

    public $nama, $kelas, $absen;

    public function cetakCoba(){
        return "berhasil";
    }

}

$coba1 = new Coba();

echo $coba1->cetakCoba();

$coba1->nama = "Alvin";
$coba1->kelas = "XI 1"; 
$coba1->absen = 1;

echo $coba1->nama . " " . $coba1->kelas . ". Absen saya :" . $coba1->absen;

// Class Rumah

class Rumah {
    public $blok, $catWarna;

    public function cetakInformasi(){
        return $this->blok;
    }
}

$rumahAlvin = new Rumah();
$rumahAlvin2 = new Rumah();
$rumahAlvin->blok = "E";
echo $rumahAlvin->cetakInformasi();

// PERTEMUAN - 2 / PROPERTY, METHOD, CONSTRUCTOR, SETTER, GETTER

class Mahasiswa {
    private $nama, $nim;

    public function getNama(){
        return $this->nama;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

}

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNama("Alvin");
echo $mahasiswa1->getNama();

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setNama("Yosua");
echo $mahasiswa2->getNama();


class Lingkaran {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return 3.14 * $this->jariJari ** 2;
    }
}

$lingkaran1 = new Lingkaran(5);
echo $lingkaran1->hitungLuas();


class Karyawan {
    private $nama, $gaji;

    public function __construct($nama, $gaji){
        $this->nama = $nama;
        $this->gaji = $gaji;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getGaji(){
        return $this->gaji;
    }

    public function tambahGaji($bonus){
        return $this->gaji += $bonus;
    }


}

$karyawan1 = new Karyawan("Alvin", 5000000);
echo "<br>";
echo "Nama karyawan : " . $karyawan1->getNama() . ". Gaji : " . $karyawan1->getGaji();
echo "<br>";
echo "Tambahan gaji : " . $karyawan1->tambahGaji(500000);






?>