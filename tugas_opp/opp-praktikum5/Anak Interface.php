<?php
interface Formasi {
public function dataFormasi();
}

interface Peserta extends Formasi {
public function dataDiri();
public function dataOrtu();
public function dataSekolahAsal();
}
class Siswa implements Peserta {
public string $nama = "Kiki";
public string $formasi = "SI";
public function dataFormasi() {
return $this->formasi;
}

public function dataDiri() {
return $this->nama;
}

public function dataOrtu() {
//
}

public function dataSekolahAsal() {

//
}

}
class Mahasiswa implements Peserta {
public string $nama = "Zizi";
public string $formasi = "SI";
public function dataFormasi() {
return $this->formasi;
}

public function dataDiri() {
return $this->nama;
}

public function dataOrtu() {
//
}

public function dataSekolahAsal() {
//
}
}

$ssw = new Siswa;
echo "<p>" . $ssw->dataDiri() . "</p>";
62. echo "<p>" . $ssw->dataFormasi() . "</p>";
63. $mhsw = new Mahasiswa;
64. echo "<p>" . $mhsw->dataDiri() . "</p>";
65. echo "<p>" . $mhsw->dataFormasi() . "</p>";
