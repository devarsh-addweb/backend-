<h2 align="center">Opps Program</h2><hr>
<?php
class d 
{
  public $name;
  function name($name) 
  {
    $this->name = $name;
  }
}
$apple = new d();
$apple->name("devarsh");

echo $apple->name;
echo "<hr>";
//---------------------------


class dev
{
	public $color;
	function color($select)
	{
		$this->color=$select;
	}

}
$obj= new dev();
$obj->color("black");
echo $obj->color;
echo "<br>";
$obj->color("white");
echo $obj->color;
echo "<hr>";

?>

<?php
//---------------constructor pro..........
class surname {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$s = new surname("chauhan");
echo "<br>";
echo $s->get_name();
echo "<hr>";
?> 

<?php
//---------------destroctor........
class fal {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() 
  {
  	echo "<br>";
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new fal("Apple", "red");
?>
<?php 
echo "<br>"."heelooo";
?> 

<?php
class Foo {
    public static function aStaticMethod() {
        // ...
    }
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod();
echo "<hr>";
?>

<?php
//----------access modifers.......
class mango {
  public $name;
  protected $color;
  private $weight;
}

$mango = new mango();
$mango->name = 'yellow'; // OK
//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR
echo "<br>";
echo $mango->name;
echo $mango->color;
echo "<hr>";
?> 


<?php
//----inheritance......


class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected
echo "<hr>";
?> 

<?php
//--------------interface...........
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
echo "<hr>";
?>