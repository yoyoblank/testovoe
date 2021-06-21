<?
include_once 'animal.php';
class Chicken extends Animal{
    public function __construct($id){
        Animal::__construct($id);
    }
    public function takeResource(){
        return rand(0,1);
    } 
}

?>