<?
include_once 'animal.php';
class Cow extends Animal{
    public function __construct($id){
        Animal::__construct($id);
    }
    public function takeResource(){
        return rand(8,12);
    } 
    
}

?>