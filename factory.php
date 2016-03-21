
<?php

//create class shape

Class shape
{
   private $x;
   private $y;
   private $s;
   private $t;


   //set constructor
  
   public function __construct ($dim1, $dim2, $dim3, $dim4)
   {
     $this->x = $dim1;
     $this->y = $dim2;
     $this->s = $dim3;
     $this->t = $dim4;     
   }
  
    //function to get dimensions  
   public function getDimensions()
   {
     return $this->x.''.$this->y.''.$this->s.''.$this->t;
   }

} 
 
 //create the actual shape
 
class shapeFactory
{
   public static function create($dim1,$dim2,$dim3,$dim4)
     {
       return new shape($dim1,$dim2,$dim3,$dim4);
     }
  
}
  
  //call the objetcs.

$square=shapeFactory::create(20,20,20,20);
$rectangle=shapeFactory::create(30,50,30,50);

print_r($square->getDimensions());

print_r($rectangle->getDimensions());

?>
