<?php

// class Vraboten{
// 	public $ime;
// 	public $prezime;
// 	public $profesija;

// 	public function person(){
// 		echo 'Jas sum '.$this->ime.$this->prezime;
// 	}
// }

// interface iVraboten{
// 	public function raboti();
// }
// class Smetkovoditel extends Vraboten implements iVraboten{
// 	public function raboti(){
// 		echo $this->ime.' '.$this->prezime.'Profesija smetkovoditel<br/>';
// }
// }

// class Profesor extends Vraboten implements iVraboten{
// 	public function raboti(){
// 		echo $this->ime.' '.$this->prezime.'Profesija profesor<br/>';
// }
// }

class Kompjuter{
	public static $CPU;
	public static $GPU;

	public static function Info(){
		return 'Kompjuter CPU: '.self::$CPU.', GPU: '.self::$GPU;
	}

}
Kompjuter::$CPU = 'Intel';
Kompjuter::$GPU = 'NVidia';
echo Kompjuter::Info();

class Validate {
	public static Email($email){
		if(strlen($email) %2 == )
	}
}

?>