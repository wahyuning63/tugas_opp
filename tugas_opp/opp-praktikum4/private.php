<?php 

class Mahasiswa{
	
	private string $nim;
	public string $nama;

	public function setNim(string $a){
		$this->nim = $a;
	}

	public function setNama() {
		$this->nama = $nama;
	}

	public function getNim() {
		return $this->nim;
	}
}

$mhsw = new Mahasiswa;
$mhsw->SetNim("17021000");
$mhsw->setNama("kiki");

echo "<p>" . $mhsw->getNim() ."</p>";
echo "<p>" . $mhsw->nama ."</p>";

 ?>