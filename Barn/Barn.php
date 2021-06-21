<?
include_once __DIR__ . '/../Animals/animal.php';
include_once __DIR__ . '/../console.php';
class Barn{
    private $animals = array();
    private $summ = 0;
    public function addAnimal($animal){
        $this->animals[] = $animal;   
    }
    public function deleteAnimal($id){
        $index = null;
        for($i=0;$i<count($this->animals);$i++){
            if($this->animals[$i]->getId()==$id){
                $index = $i;
            }
        }
        if($index == null){
            echo "Животного под таким ID нет";
        }
        else{
        unset($this->animals[array_search($this->animals[$index],$this->animals)]);
        }
    }
    public function showAnimals(){
        print_r($this->animals);
    }
    public function getAnimals(){
        return $this->animals[0];
    }
    public function takeResource(){
        $resources = array();
        for($i=0;$i<count($this->animals);$i++){
            $resources[] = $this->animals[$i]->takeResource();
        }
        for($j=0;$j<count($resources);$j++){
            $this->summ += $resources[$j];
        }
        
    }
    public function ShowInfo(){
        if(count($this->animals) != 0){
        $class = get_class($this->animals[0]);
       console_log("Тип: $class");
       $count = count($this->animals);
       console_log("Кол-во: $count");
    }
    }
    public function ShowResource(){
        if(count($this->animals) != 0){
       $class = get_class($this->animals[0]);
       $summ = $this->summ;
       console_log("Тип: $class , Кол-во продукции: $summ");
        }
    }
}



?>