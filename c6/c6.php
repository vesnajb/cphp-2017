<?php

// class car{
// 	public $brand;
	
// 	public function changeBrands($new_brand){
// 		$brands = ['BMW', 'Mercedes', 'Audi', 'VW','Fiat'];
	
// 	if(in_array($new_brand, $brands)){ 
// 		$this -> brand = $new_brand; 
// 	}else{
// 		echo 'This brand doesnt exists.'.$new_brand.'<br/>';
// 	}
// } 
// 	public $color;
	
// 	public function changeColor($new_color){
// 		$color = ['red', 'blue', 'green', 'black', 'white'];
	
// 	if(in_array($new_color, $color)){ 
// 		$this -> brand = $new_color; 
// 	}else{
// 		echo 'This color doesnt exists.'.$new_color.'<br/>';
// 	}
// } 
// }

// $c1 = new car; 
// $c2 = new car;


// $c1 -> changeBrands('Citroen');
// $c2 -> changeBrands('BMW');

// print_r($c1);
// echo '<br/>';
// print_r($c2);
// echo '<br/>';
// echo '<br/>';

// $c1 -> changeColor('red');
// $c2 -> changeColor('pink');

// print_r($c1);
// echo '<br/>';
// print_r($c2);
// echo '<br/>';
// echo '<br/>';

// // 
// // $type = ['sports', 'family', 'city'];
// // $speed = ['fast', 'medium', 'slow'];

// class Avtomobil{
// 	private $proizvoditel;
// 	private $model;
// 	private $boja;
// 	private $gorivo;
// 	private $godina;

// 	public function _construct($p, $m){
// 		$this->setProizvoditel($p);
// 		$this->setModel($m);
// 	}

// 	public function setProizvoditel($p){

// 		$proizvoditeli = ['shkoda', 'lada', 'zastava'];

// 		if(in_array($p, $proizvoditeli)){
// 			$this->proizvoditel = $p;
// 		}

// 	}
// 	public function getProizvoditel(){
// 		return $this->proizvoditel;
// 	}

// 	public function setModel($m){

// 		$modeli = ['101', 'fabia', 'cactus'];

// 		if(in_array($m, $modeli)){
// 			$this->model = $m;
// 		}

// 	}
// 	public function getModel(){
// 		return $this->model;
// 	}

// 	public function setBoja($b){

// 		$boi = ['red', 'blue', 'green', 'black', 'white'];

// 		if(in_array($b, $boi)){
// 			$this->boja = $b;
// 		}

// 	}
// 	public function getBoja(){
// 		return $this->boja;
// 	}


// 	public function setGorivo($g){

// 		$goriva = ['benzin', 'dizel', 'eko'];

// 		if(in_array($g, $goriva)){
// 			$this->gorivo = $g;
// 		}

// 	}
// 	public function getGorivo(){
// 		return $this->gorivo;
// 	}


// 	public function setGodina($g){
// 		if($g > 1910){
// 			$this->godina = $g;
// 	}
// 	}

// 	public function getGodina(){
// 		return $this->godina;
// 	}
	

// 	public function kochi(){
// 		echo "Mi naidoa patnici i so mojata ".$this->boja.' '.$this->model." moram da kocham. Potoa moram pravo na benziska, da natocham ".$this->gorivo;
// 	}
// 	}

// 	// $a1 = new Avtomobil;
// 	$a1 = new Avtomobil('zastava', '101'); //inicijalizacija 

// 	$a1 -> setProizvoditel('zastava');
// 	$a1 -> setModel('101');
// 	$a1 -> setBoja('red');
// 	$a1 -> setGorivo('benzin');
// 	$a1 -> setGodina(2000);

// 	print_r($a1);
// 	echo '<br/>';

// 	$a1->kochi();

	
class File {
	private $handle;
	private $filename;

	public function _construct($filename){
		$this->$filename = $filename;
		$this->handle = fopen($filename, 'a+');
		
	}

	public function write($text){
		fwrite($this->handle, $text);
	}

	public function read(){
		rewind($this->handle);
		return fread($this->handle, filesize($this->filename));
	}
}

	$f = new File('fajl.txt');
	$f->write('text bla bla bla');
	echo $f->read();

?>