<?php

interface sortStrategy{
	
	public function sort();
}

//quick sort class
class quicksort{
	private $data;
	public function __construct(Array $data){
	$this->data=data;
	}

	public function sort()
		{
			//do some quick sort
		}

}


//merge sort class

class mergesort
{
	private $data;
	public function __construct(Array $data){
     $this->data=$data;

	}

	public function sort()
	{
		  //do some merge sort
	}


}

//function to sort the data

function sort(Array &$data)
{
	if (count($data)>20){
    $tempData =new quicksort($data);
   	}

   	else{
   	 $tempData=new MergeSort($data);  
   	}

   	$tempData->sort();
}

//data to sort.
$data=array(10,45,67,98,65,89,19,45);
sort($data);

?>