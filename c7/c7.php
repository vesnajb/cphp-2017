<?php

class A {
	protected $name;//property

	public function start(){//metod
	echo 'Starting: '.$this->name.'<br>';
	}
	public function setName($n){//seter
		$this->name = $n;
	}
}

class B extends A {
	public function end(){
		echo 'Ending: '.$this->name.'<br>';
	}
}

class C extends A {
	public function end(){
		echo 'Razlicno '.$this->name.'<br>';
	}
}

// $b = new B; //kreiranje objekt od class B
// // $b->name = 'Pero';
// $b->setName('Janko');
// $b->start();
// // echo '<br>';
// $b->end();

// $c = new C;
// $c->setName('Stanko');
// $c->start();
// $c->end();

class Document{
	public $name;
	public $size;
	public $type;

}
interface iDocument{
	public function GetContent();
}

class Excel extends Document implements iDocument{
	public function GetContent(){
	echo 'Exel content output!<br/>';
}}

class Word extends Document implements iDocument{
	public function GetContent(){
	echo 'Word content output!<br/>';
}}

class PowerPoint extends Document implements iDocument{
	public function GetContent(){
	echo 'PowerPoint content output!<br/>';
}}



?>