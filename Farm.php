<?
include_once __DIR__ . "/Barn/Barn.php";
include_once __DIR__ . "/createAnimal.php";
class Farm{
    private $barns = array();
    private $id = 0;
    public function addBarn($barn){
        $this->barns[] = $barn;
    }
    public function deleteBarn($barn){
        unset($this->barns[array_search($barn,$this->barns)]);
    }
    public function takeResource(){
        $resourse = array();
        for($i=0;$i<count($this->barns);$i++){
            $resourse[] = $this->barns[$i]->takeResource();
        }
        return $resourse;
    }
    public function ShowInfo(){
        for($i=0;$i<count($this->barns);$i++){
            $this->barns[$i]->ShowInfo();
        }
    }
    public function ShowResource(){
        for($i=0;$i<count($this->barns);$i++){
            $this->barns[$i]->ShowResource();
        }
    }
    public function addAnimal($animal,string $typeBarn){
        $this->id = $this->id + 1;
        $animal = createAnimal($animal, $this->id);
        $isExist = false;
        for($i=0;$i<count($this->barns);$i++){
            if(get_class($this->barns[$i]) == $typeBarn){
                $isExist = true;
                $this->barns[$i]->addAnimal($animal);
            }
        }
        if($isExist == false){
            echo "Такого типа нет";
        }
    }
    public function ShowAnimals(){
        for($i=0;$i<count($this->barns);$i++){
            $this->barns[$i]->ShowAnimals();
        }
    }
}
?>
