<!-- Example 1 -->

class Tree {
	//body
	//body
	//body	

}

class Squirrel {
	//body
	//body
	//body

}

class Acorn {
	//body
	//body
	//body

}

<!-- Example 2 -->

$Tree1 = new Tree();
$Tree2 = new Tree();

$Squirrel1 = new Squirrel();
$Squirrel2 = new Squirrrel();

$Acorn1 = new Acorn();
$Acorn2 = new Acorn();

<!-- Example 3 -->

class Tree {
	public $name = “names of trees”;
	public $color = “color”;
	public $sap = “sap”;
	public $leaves = 0;

}

class Squirrrel {
	public $type = “different types of squirrels”;
	public $color = "color”;
	public $gender = “female”;
	public $fur = "soft fur";

}

class Acorn {
	public $name = “default name”;
	public $color = “color”;
	public $taste = “taste”;
	public $size = "size";

}

<!-- Example 4 -->

public function myMethod( $argument, $another) {
	// stuff
}

public function myMethod( $argument, $another) {
	// stuff
}
public function myMethod( $argument, $another) {
	// stuff
}

<!-- Example 5 -->

class Tree {
public $name = “default name”;
public $color = “color”;
public $sap = “sap”;
public $leaves = 0;
function getName() {
return “{$this­>name}” .
“{$this­>color}”;

}

}

class Squirrel {
public $type = “different types of squirrels”;
public $color = “color”;
public $gender = “female”;
public $fur = "soft fur";
function getName() {
return “{$this­>type}” .
“{$this­>color}”;
}

}

class Acorn {
public $name = “default name”;
public $color = “color”;
public $taste = “taste”;
public $size = "size";
function getName() {
return “{$this­>name}” .
“{$this­>color}”;
}

}

<!-- Example 6 -->

$Tree1 = new Tree();
$Tree1­>name = “Sequioa”;
$Tree1­>color = “Red";
print “The tree is a {$Tree1­>name()}.”;
//The tree is a Sequioa.

$Squirrel1 = new Squirrel();
$Squirrel1­>name = “Squirrel”;
$Squirrel1­>color = “Squirrel”;
print “The squirrel is brown {$squirrel1­>color()}.”;
//The squirrel is brown.

$Acorn1 = new Acorn();
$Acorn1­>name = “Brown”;
$Acorn1­>color = “Acorn”;
print “The acorn is {$Acorn1­>color()}.”;
//The acorn is brown.

<!-- Example 7 -->


class Tree {
public $name;
public $color;
public $sap;
function __construct($title, $name, $color, $sap) {
$this­>name = $name;
$this­>color = $color;
$this­>sap = $sap;
}
function getName() {
return “{$this­>name}” .
“{$this­>color}”;
}
}

class Squirrel {
public $type;
public $color;
public $fur;
function __construct($title, $type, $color, $fur) {
$this­>type = $type;
$this­>color = $color;
$this­>fur = $fur;
}
function getName() {
return “{$this­>type}” .
“{$this­>color}”;
}
}

class Acorn {
public $name;
public $taste;
public $size;
function __construct($title, $name, $taste, $size) {
$this­>name = $name;
$this­>taste = $taste;
$this­>size = $size;
}
function getName() {
return “{$this­>name}"
“{$this­>taste}”;
}
}

<!-- Example 8 -->

<?php
if (is_array(‘hello’))

	<?php
if (is_bool(‘hello’))
	
	<?php
if (is_object(‘hello’))

// Example 9

	echo “It is a string”;
else
echo ‘It is not a string’;
var_dump(is_array(‘XYZ’));
var_dump(is_array(‘8008’));
var_dump(is_array(123));
var_dump(is_array(false));
?>

echo “It is a string”;
else
echo ‘It is not a string’;
var_dump(is_bool(‘XYZ’));
var_dump(is_bool(‘8008’));
var_dump(is_bool(123));
var_dump(is_bool(false));
?>

echo “It is a string”;
else
echo ‘It is not a string’;
var_dump(is_bool(‘XYZ’));
var_dump(is_bool(‘8008’));
var_dump(is_bool(123));
var_dump(is_bool(false));
?>