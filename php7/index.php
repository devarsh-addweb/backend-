<?php

//---------return type declaration--------
   declare(strict_types = 1);
   function returnIntValue(int $value): int 
   {
      return $value;
   }
   print(returnIntValue(10));
   echo "<hr>"; 
?>

<?php
//----------Null coalescing operator----------

   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");


   // Equivalent code using ternary operator
   $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);
   echo "<hr>";
?>

<?php

//------------Spaceship operator----------

   //integer comparison
   print( 1 <=> 1);print("<br/>");
   print( 1 <=> 2);print("<br/>");
   print( 2 <=> 1);print("<br/>");
   print("<br/>");


   //float comparison
   print( 1.5 <=> 1.5);print("<br/>");
   print( 1.5 <=> 2.5);print("<br/>");
   print( 2.5 <=> 1.5);print("<br/>");
   print("<br/>");


   //string comparison
   print( "a" <=> "a");print("<br/>");
   print( "a" <=> "b");print("<br/>");
   print( "b" <=> "a");print("<br/>");
   echo "<hr>";
?>

<?php 

//-----------Constant arrays using define()---------
 //define a array using define function
   define('animals', [
      'dog',
      'cat',
      'bird'
   ]);
   print(animals[0]);
   //declare numbering array
?>
<?php
echo "<br><hr>";
//----------Anonymous Classes-----------

 interface Logger 
 {
    public function log(string $msg);
 }
 class Application 
 {
      private $logger;
      public function getLogger(): Logger 
      {
         return $this->logger;
      }
      public function setLogger(Logger $logger) 
      {
         $this->logger = $logger;
      }  
 }
   $app = new Application;
   $app->setLogger(new class implements Logger 
    {
      public function log(string $msg) 
      {
         print($msg);
      }
    });


   $app->getLogger()->log("My first Log Message");
   echo "<hr>";
?>

<?php
//-----------sesion -----------
   session_start([
      'cache_limiter' => 'private',
      'read_and_close' => true,
   ]);
   echo "session pro";
   echo "<hr>";

?>

<?php 
//-------
    echo "<br>";
   function generator(){
      yield "zero";
      yield "one";
      yield "two";
   }
   function generator1(){
      yield "three";
      yield "four";
      yield "five";
   }
   function generator2(){
      yield "six";
      yield "seven";
      yield "eight";
      yield from generator();
      yield "nine";
      yield from generator1();
      yield "ten";
   }
   foreach (generator() as $value){
      echo $value, PHP_EOL;
   }
   foreach(generator2() as $value){
      echo $value, PHP_EOL;
   }
   echo "<hr>";
?>

<?php
echo "<br><br>";
   trait Reader{
      public function add($var1,$var2){
         return $var1+$var2;
      }
   }
   trait writer {
      public function multiplication($var1,$var2){
         return $var1*$var2;
      }
   }
   class File {
      use Reader;
      use writer;
      public function calculate($var1,$var2)
      {
         echo "Result of addition:".$this->add($var1,$var2) ."\n";
         echo "<br>";
         echo "Result of multiplication:".$this->multiplication($var1,$var2);
      }
   }
   $o = new File();
   $o->calculate(7,8);
   echo "<hr>";
?>


<?php
    
    //------Filtered unserialize()------

   class MyClass1 { 
      public $obj1prop;   
   }
   class MyClass2 {
      public $obj2prop;
   }
   $obj1 = new MyClass1();
   $obj1->obj1prop = 1;
   $obj2 = new MyClass2();
   $obj2->obj2prop = 2;


   $serializedObj1 = serialize($obj1);
   $serializedObj2 = serialize($obj2);
   
   $data = unserialize($serializedObj1 , ["allowed_classes" => true]);
   $data2 = unserialize($serializedObj2 , ["allowed_classes" => ["MyClass1", "MyClass2"]]);

   echo "<br>";
   print($data->obj1prop);
   print("<br/>");
   print($data2->obj2prop);
   echo "<hr>";
?>
<?php 

//---------CSPRNG---RANDOM NUMBER CREATED------

echo "<br>";
 $bytes = random_bytes(2);
   print(bin2hex($bytes));
   echo "<hr>";
?>

<?php
   print(random_int(100, 999));
   print("");
   print(random_int(-1000, 0));
   echo "<hr>";
?>

<?php 

//------- Closure::call()-------
//--------old version------
  class A {
      private $x = 1;
   }
   // Define a closure Pre PHP 7 code
   $getValue = function() 
   {
      return $this->x;
   };
   // Bind a clousure
   $value = $getValue->bindTo(new A, 'A'); 

   echo "<br>";
   print($value());
   echo "<br>";
?>
<?php
//------------7 version ---------
   class A 
   {
      private $x = 2;
   }


   // PHP 7+ code, Define
   $value = function() {
      return $this->x;
   };


   print($value->call(new A));
?>


