<?php 
//arrays 
$fruits = array('bannana','orange','apple');
$cars = array(
'Honda' => 'civic',
'Bmw'=> '320I'
);

//complex array 
$persons=[
'basem'=>['age'=>12,'lname'=>'dahroug','job'=>'developer'],
'sam'=>['age'=>15,'lname'=>'samuel','job'=>'coder']
];

//json 
$output='{"basem":{"age":12,"lname":"dahroug","job":"developer"},"sam":{"age":15,"lname":"samuel","job":"coder"}}';
//loop
//var_dump($cars);

//callback
$array_coverted=json_decode($output); //echo $array_coverted->basem->age;

// conditinal 
$a=22;
$b=352;

// echo ($a+$b==37)  ? 'total is 37' : 'total is not 37! totall is '.$a+$b;

// $result = ($a+$b==37)?'sum of vars matches 37!':'sum mismatch value is '. $a+$b;

switch ($a+$b) {
	case '37':
		$result='Yes it matches';
		break;
	
	case '57':
	$result = 'No its not its 57';
	break;

		default:
		$result = 'its not 57 or 37';
		
}

// echo $result;

//loops 
//for
for($x=0;$x<count($fruits);$x++) // seprated by simi column
{
// echo $fruits[$x];
}

//foreach
foreach($fruits as $fruit){
	// echo $fruit.'<br>';
}

//while 
$counter=0;$count=count($persons);
// while ($counter<$count){
// 	// echo $persons[$counter]['name'];
// 	// $counter ++;
// }
//functions 

// $sum = function ($a,$b) {echo $a+$b;};
$sum = fn($a,$b) =>  $a+$b ;

// echo $sum(2,3);

//array sort 

$new_fruits=array_map(fn($fruit)=>"Fruit : {$fruit}", $fruits);
// print_r($new_fruits);


$fruits_filter=array_filter($fruits,fn($fruit)=>$fruit=='orange');
// print_r($fruits_filter);

$fruits_reduce = array_reduce($fruits, fn($carry,$fruit)=>$carry .','. $fruit);
// print_r($fruits_reduce);

//string manpulation 
// printf ("%s is very cool and he works as %s ","basem",'webdeveloeper');


//try and catch 
function add5($num){
	if ($num < 5){
		// throw new Exception("Added digit smaller than 5", 1);
			}
			if($num == 5){
				// throw new Exception ("added digit can't be 5");
			}			
	return $num + 5;
}

// try{
// echo add5(15);	
// }
// catch(Exception $e){
// echo $e->getMessage();
// }
// finally{
// 	echo 'done !'  ;
// }

class Car {
	public $model ;
	public $make ; 
	private $year ; 

public function __construct($model , $make , $year){
$this->model = $model;	
$this->make =$make;
$this->year= $year;
}
public function get_year(){
	return $this->year ;
}	
}
$car1 = new car('honda','civic','2007') ;
$car2 = new car('bmw','I320','2005');
// echo $car1->get_year();
// echo $car2->get_year();

class modifedCar extends Car {
	public $modifed ;

	public function __construct($model,$make,$year,$modifed){
		Parent::__construct($model,$make,$year);
		$this->modifed=$modifed;
	}
}
$car3= new modifedCar('daweoo','esperoo','1996','yes');
// var_dump($car3);
echo $car3->get_year();
?>