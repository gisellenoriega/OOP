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

<!-- Example 5 -->

class Tree {
public $name = “default name”;
public $color = “color”;
public $sap = “sap”;
public $leaves = 0;
function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;

}

}
$Tree1 = new Tree();
$Tree1­>firstName = “Sequioa”;
$Tree1­>lastName = “Tree”;
print “The tree’s name is {$Tree1­>getName()}.”;
//The tree’s name is Sequioa Tree.

class Squirrel {
public $type = “different types of squirrels”;
public $color = “color”;
public $gender = “female”;
public $fur = "soft fur";
function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}

}
$Squirrel1 = new Squirrel();
$Squirrel1­>firstName = “Squirrel”;
$Squirrel1­>lastName = “Squirrel”;
print “The squirrel’s fur is {$squirrel1­>getName()}.”;
//The squirrel's fur is soft .

class Acorn {
public $name = “default name”;
public $color = “color”;
public $taste = “taste”;
public $size = "size";
function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}

}
$Acorn1 = new Acorn();
$Acorn1­>firstName = “Brown”;
$dog1­>lastName = “Acorn”;
print “The acorn is a {$Acorn1­>getName()}.”;
//The acorn is a brown acorn.
