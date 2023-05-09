<?php 

class Mahasiswa{
	public string$nim;
	public string$nama;

	public function setNim(string $a){
		$this-> nim=$a;
	}

	public function setNama(string $b){
		$this->nama=$b;
	}
} 
class Nilai extends Krs{

private static int $nilai=90;
public function getmatakuliah;
}

public static function getNilai(){
	return self::$nilai;
}

$nilai =new Nilai();

//Memanggil class Mahasiswa
$nilai ->setNIM("17021000");
$nilai->setNama("Faiza");

// Memanggil class Krs
$nilai->
setMatakuliah("Pemrograman Berbasis Web Lanjutan");

echo "<p>Nim= ". $nilai->getNim() . "</p>";
echo "<p>Nama= ". $nilai->getNama() . "</p>";
echo "<p>Matakuliah= ". $nilai->getMatakuliah() . "</p>";
echo "<p>Nilai= " .Nilai::getNilai(90) . "</p>";
?>
