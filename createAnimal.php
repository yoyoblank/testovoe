<?
function createAnimal($animal,$id){
    if($animal == "Cow"){
        return new Cow($id);
    }
    if($animal == "Chicken"){
       
        return new Chicken($id);
    }
}
?>