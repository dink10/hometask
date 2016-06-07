<?php	
// К сожалению я ещё не разобрался с автолодером и use и namespace поэтому только так покачто.
include 'autoLoad.php';
use hey\AnimalAbstr;
use hey\AnimalInter;
use hey\MammalsAnimal;
use	hey\WaterAnimal;

$fish = new WaterAnimal('Рыба','Зеленый',10,'Водоросли','Буль-Буль','закрываю глаза');
$lion = new MammalsAnimal('Лев','Желтый',50,'Мясо','АрРРрр','ХрРр-Ххррр');

/* $someObjAnimalAbstr = AnimalAbstr::returnObj(); <--- ругается, всё правильно.
 Но мы можем обратиться на прямую :*/
//AnimalAbstr::meetingWithAbstractClass();// just for creating some parent creature 
$fish->sayHello();
$fish->name();
$fish->talk();
$fish->proper();
$fish->eat();
$fish->sleep();
echo '<hr />';
$lion->sayHello();
$lion->name();
$fish->talk();
$lion->proper();
$lion->eat();
$lion->sleep();
?>

