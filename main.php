<?

class Farm
{
    private $id;
    private $type = (object)[
        'Cow' => 'Корова', 
        'Chiken' => 'Курица'
    ];
    static $countCow = 0;
    static $countChiken = 0;

    public function __construct($number, $id, string $type)
    {
        $this->number = $number;
        $this->id = $id;
        $this->type = $type;
        if ($this->type == "Корова"){
        Farm::$countCow++;
        }
        if ($this->type == "Курица"){
            Farm::$countChiken++;
            }
    }

    public function createAnimal(){
        $number = $this->number;
        $typeAnimal = $this->type;
        $id = $this->id;
        $res = "$typeAnimal $number с уникальным номером $id была создана";
        return $res;
    }
}


function getAllAnimal(){
    $countCow = Farm::$countCow;
    $countChiken = Farm::$countChiken;
    $res = "Количество кур на ферме $countChiken, количество коров $countCow";
    return $res;
}

$randArray = array();
$animalCow = array();
$animalChiken = array();


function createNewAnimals($cow,$chiken){
if($cow > $chiken){
    $iter = $count+$cow;
}
else{
    $iter = $count+$chiken;
}
$check = 0;

for($i=0;$i<$iter;$i++){
    $rand1 = rand(0, 100);
    $rand2 = rand(0, 100);
    $randArray[] = $rand1;
    $randArray[] = $rand2;
    if($check<$cow){
    $animalCow[Farm::$countCow+1] = new Farm(Farm::$countCow+1,$rand1,"Корова",0);
    console_log($animalCow[Farm::$countCow]->createAnimal());
    }
    if($check<$chiken){
    $animalChiken[Farm::$countChiken+1] = new Farm(Farm::$countChiken+1,$rand2,"Курица",0);
    console_log($animalChiken[Farm::$countChiken]->createAnimal());
    }
    $check++;
}
}
createNewAnimals(10,20);
console_log(getAllAnimal());
createNewAnimals(1,5);
console_log(getAllAnimal());


















function console_log($data){ // сама функция
    if(is_array($data) || is_object($data)){
		echo("<script>console.log(".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('".$data."');</script>");
	}
}
?>