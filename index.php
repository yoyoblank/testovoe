<?
include_once __DIR__ . '/Animals/cow.php';
include_once __DIR__ . '/Animals/chicken.php';
include_once __DIR__ . '/Barn/barn.php';
include_once __DIR__ . '/Barn/ChickenBarn.php';
include_once __DIR__ . '/Barn/CowBarn.php';
include_once __DIR__ . '/console.php';
include_once 'Farm.php';


$Farm = new Farm();
$Farm->addBarn(new ChickenBarn());
$Farm->addBarn(new CowBarn());
console_log("Добавили животных");
for($i=0;$i<10;$i++){
    $Farm->addAnimal("Cow","CowBarn");
}

for($i=0;$i<20;$i++){
    $Farm->addAnimal("Chicken","ChickenBarn");
}
console_log(" ");
console_log("Информация о состоянии животных в хлевах");
$Farm->ShowInfo();

console_log(" ");

for($i=0;$i<7;$i++){
$Farm->takeResource();
}
console_log("Прошло 7 дней....");
console_log("Произвели сбор");
$Farm->ShowResource();

console_log(" ");
console_log("Съездили на рынок докупили 1 свинью и 5 кур");
for($i=0;$i<1;$i++){
    $Farm->addAnimal("Cow","CowBarn");
}

for($i=0;$i<5;$i++){
    $Farm->addAnimal("Chicken","ChickenBarn");
}
console_log(" ");
console_log("Информация о состоянии животных в хлевах");
$Farm->ShowInfo();

for($i=0;$i<7;$i++){
    $Farm->takeResource();
}  
console_log(" ");
console_log("Прошло 7 дней....");
console_log("Произвели сбор");
$Farm->ShowResource();
?>