<!-- Inheritance is the means by which one or more classes can be derived from a base class -->
<?php 
class iPod {
	public $Name;
	public $frontcamera;
	public $doublesidedcameras;
	public $color;
	public $generation;

	function __construct($Name, $frontcamera, $doublesidedcamera, $color, $generation) {
			$this->Name = $Name;
			$this->frontcamera = $frontcamera;
			$ths->doublesidedcamera = $doublesidedcamera;
			$this->color = $color;
			$this->generation = $generation;

}

	function getName() {
	return "This is a" . $this->Name . "it only has a" . $this->frontcamera;
	}
}

class size extends gigabytes {
	function __construct($Name, $frontcamera, $doublesidedcamera, $color, $generation){
			parent:: __construct($Name, $frontcamera, $doublesidedcamera, $color, $generation);
	$this->generation = $generation;
	}
	function greet() {
		return $this->color

function __construct($Name, $frontcamera, $doublesidedcamera, $color, $generation){
			parent:: __construct($Name, $frontcamera, $doublesidedcamera, $color, $generation);
	$this->color = $color;
	}

	function greet() {
		return $this->color
	}
}

$Name = new iPod("iPod4", "white", "small", "16GB");
print "The iPod is a" . $Name->getName();