<?php
namespace hey
class MammalsAnimal extends AnimalAbstr implements AnimalInter{
    private $eat;
    private $talk;
    private $sleep;
	
public function __construct($name,$color,$weight,$eat,$talk,$sleep)
{
parent::__construct($name,$color,$weight);
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
    $this->eat = $eat;
    $this->talk = $talk;
    $this->sleep = $sleep;
}
		
public function sayHello()
{
    echo 'Привет я из семейства '.get_class($this).'<br />';
}
public function name()
{
    echo 'Меня зовут '.$this->name.'<br/>';
}
public function talk()
{
    echo 'Я умею говорить '.$this->talk.'<br />';
}
public function proper()
{
    echo 'Мой цвет '.$this->color.'<br />Мой вес '.$this->weight.'<br />';
}
public function eat()
{
    echo 'Я ем '.$this->eat.'<br />';
}
public function sleep()
{
    echo 'Когда я сплю я делаю так '.$this->sleep;
}
}
?>
