<?
    class Animal 
    {
       private $id;
       private $idAnimal;
       public function __construct($id){
            $this->id = $id;
        }
        public function takeResource(){
        
       }
        public function getId(){
            return $this->id;
        }
    }
?>