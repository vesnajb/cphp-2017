<?php

class Calculator {
	private $a;
	private $b;

	public function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}
	
	public function soberi() {
		return $this->a + $this->b;
	}
	public function odzemi() {
		return $this->a - $this->b;
	}
	
	public function pomnozi() {
		return $this->a * $this->b;
	}
	
	public function podeli() {
		return $this->a / $this->b;
	}
	
}


	$calc = new Calculator(9, 6);
	// print_r($calc);
	echo '<br>';
	echo 'Zbirot e '.$calc->soberi();
	echo '<br>';
	echo 'Razlikata e '.$calc->odzemi();
	echo '<br>';
	echo 'Proizvodot e '.$calc->pomnozi();
	echo '<br>';
	echo 'Kolicnikot e '.$calc->podeli();


class Obleka{
	private $golemina;
	private $boja;
	private $tip;
	private $namena;

	public function __construct($g, $b, $t, $n) {
		$this->setGolemina($g);
		$this->setBoja($b);
		$this->setTip($t);
		$this->setNamena($n);
	}

	public function setGolemina($g){
		$golemini = ['S', 'M', 'L', 'XL'];
		if(in_array($g, $golemini)){
			$this->golemina = $g;
	}}
	public function getGolemina(){
		return $this->golemina;
	}

	public function setBoja($b){
		$boi = ['crvena', 'crna', 'sina', 'bela'];
		if(in_array($b, $boi)){
			$this->boja = $b;
	}}
	public function getBoja(){
		return $this->boja;
	}


	public function setTip($t){
		$tipovi = ['bluzon', 'maica', 'farmerki', 'suknja', 'fustan'];
		if(in_array($t, $tipovi)){
			$this->tip = $t;
	}}
	public function getTip(){
		return $this->tip;
	}

	public function setNamena($n){
		$nameni = ['maska', 'zenska', 'detska', 'tinejdzerska', 'bebeska'];
		if(in_array($n, $nameni)){
			$this->namena = $n;
	}}
	public function getNamena(){
		return $this->namena;
	}

	public function tekst(){
		echo 'Oblekata e '.$this->tip.', '.$this->namena.' so golemina '.$this->golemina.' i boja '.$this->boja.'.';
	}

}
	$obleka1 = new Obleka('M', 'sina', 'maica', 'zenska'); 
	// echo '<br>';echo '<br>';
	// print_r($obleka1);
	echo '<br>';echo '<br>';
	$obleka1->tekst(); 



	class Krevet{
	private $dimenzija;
	private $boja;
	private $tip;
	private $materijal;
	private $namena;

	public function __construct($d, $b, $t, $m, $n) {
		$this->setDimenzija($d);
		$this->setBoja($b);
		$this->setTip($t);
		$this->setMaterijal($m);
		$this->setNamena($n);
	}

	public function setDimenzija($d){
		$dimenzii = ['1m', '2m', '3m'];
		if(in_array($d, $dimenzii)){
			$this->dimenzija = $d;
	}}
	public function getDimenzija(){
		return $this->dimenzija;
	}

	public function setBoja($b){
		$boi = ['crvena', 'crna', 'sina', 'bela'];
		if(in_array($b, $boi)){
			$this->boja = $b;
	}}
	public function getBoja(){
		return $this->boja;
	}

	public function setTip($t){
		$tipovi = ['dvosed', 'trosed', 'sofa', 'garnitura', 'spalna'];
		if(in_array($t, $tipovi)){
			$this->tip = $t;
	}}
	public function getTip(){
		return $this->tip;
	}

	public function setMaterijal($m){
		$materijali = ['koza', 'stof'];
		if(in_array($m, $materijali)){
			$this->materijal = $m;
	}}
	public function getMaterijal(){
		return $this->materijal;
	}

	public function setNamena($n){
		$nameni = ['dnevna', 'spalna', 'kancelarija'];
		if(in_array($n, $nameni)){
			$this->namena = $n;
	}}
	public function getNamena(){
		return $this->namena;
	}

	public function opis_krevet(){
		echo 'Krevetot e '.$this->tip.' za '.$this->namena.' so golemina '.$this->dimenzija.' ,boja '.$this->boja.' i materijal '.$this->materijal.'.';
	}

}
	$krevet1 = new Krevet('2m', 'sina', 'trosed',  'stof', 'kancelarija'); 
	echo '<br>';
	echo '<br>';
	// print_r($krevet1);
	$krevet1->opis_krevet(); 
	echo '<br>';

class File {
	private $handle;
	private $filename;

	public function __construct($filename){
		$this->filename = $filename;
		$this->handle = fopen($filename, 'a+');
	}
	
	public function read(){
		rewind($this->handle);
		return fread($this->handle, filesize($this->filename));

	}

	public function caracters(){
		rewind($this->handle);
		$text = fread($this->handle, filesize($this->filename));
		$array = explode(" ", $text);

		$a = str_word_count($text, 0);
		echo '<br>';echo '<br>';
		echo 'Broj na zborovi: '.$a.'<br>';
		$b = strlen($text);
		echo 'Broj na karakteri: '.$b.'<br>';

		$array2 = explode(". ",$text);

		$c = count($array2);

		echo 'Broj na recenici: '.$c.'<br>';

		$d = 0;
		foreach($array as $z){
			if(strlen($z)>7){
				$d++ ;
		 	 };
		 };
		 echo 'Zborovi pogolemi od 7 karakteri: '.$d.'<br>';

		$e=0;
		 foreach($array as $z){
			if(strlen($z)==7){
				$e++ ;
		 	 };
		 };
		 echo 'Zborovi ednakvi na 7 karakteri: '.$e.'<br>';

		 $f = 0;
		foreach($array as $z){
			if(strlen($z)<7){
				$f++ ;
		 	 };
		 };
		 echo 'Zborovi pomali od 7 karakteri: '.$f.'<br>';

}}
	
	$f = new File('test.txt');
	echo '<br>';
	// echo '<br>';
	echo $f->read();
	echo $f->caracters();


?>