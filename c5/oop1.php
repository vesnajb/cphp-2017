<?php

class Flomaster{
	private $boja; // property = promenliva definirana vo klasa

	public function smeniBoja($nova_boja){ //method = funkcija definirana vo klasa

		$boi = ['crvena', 'zelena', 'sina', 'crna', 'zolta'];

		if(in_array($nova_boja, $boi)){ //dali postoi bojata $nova_boja vo nizata $boi
		$this -> boja = $nova_boja; //this se odnesuva na ovaa klasa
	}else{
		echo 'Ne postoi vakva boja: '.$nova_boja.'<br/>';
	}
}
}

$f1 = new Flomaster; //$f1 (objekt) e reprezentacija na se sto postoi vo Flomaster klasata
$f2 = new Flomaster; //objekt, kolku sakame moze da se kreiraat od klasata

// $f1 -> boja = 'crvena';
// $f2 -> boja = 'zelena';

$f1 -> smeniBoja('crna');
$f2 -> smeniBoja('sina');

print_r($f1);
echo '<br/>';
print_r($f2);
echo '<br/>';
echo '<br/>';


class Korisnik{
	private $godini; // property = promenliva definirana vo klasa

	public function smenigodini($novi_godini){ //method = funkcija definirana vo klasa

		$godini = [22,24,26,28,30,32,34,36,38];

		if(in_array($novi_godini, $godini)){ //dali postoi bojata $nova_boja vo nizata $boi
		$this -> godini = $novi_godini; //this se odnesuva na ovaa klasa
	}else{
		echo 'Ne postoi korisnik so taa vozrast: '.$novi_godini.'<br/>';
	}
}
}
$k1 = new Korisnik;
$k2 = new Korisnik;

$k1 -> smeniGodini(24);
$k2 -> smeniGodini(28);


print_r($k1);
echo '<br/>';
print_r($k2);
echo '<br/>';
echo '<br/>';

class User{
	private $first_name;
	private $last_name;

	public parent;
	public Flomaster;

	public function changeFirstName($new_first_name){
		if(is_string($new_first_name)){
			$this -> first_name = $new_first_name;
		}
	}

	public function changeLastName($new_last_name){
		if(is_string($new_last_name)){
			$this -> last_name = $new_last_name;
		}
	}

	public function getFirstName($security_level){
		return $this -> first_name;
	}

	public function getLastName($security_level){
		return $this -> last_name;
	}

}

$user_one = new User;
$user_two = new User;
$user_three = new User;

$user_one -> changeFirstName('Pero');
$user_one -> changeLastName('Perovski');

$user_two -> changeFirstName('Janko');
$user_two -> changeLastName('Jankovski');

$user_three -> changeFirstName('Marko');
$user_three -> changeLastName('Markovski');

print_r($user_one);
echo '<br/>';
print_r($user_two);
echo '<br/>';
print_r($user_three);

// echo $user_one -> getFirstName;

$user_one -> flomaster = $f2;
print_r(expression)

?>