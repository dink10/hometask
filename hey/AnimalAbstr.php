<?php
namespace hey

abstract class AnimalAbstr
{
	
	private static $name = 'some abstract creature name';
    private static $color = 'some abstract creature color';
    private static $weight = 'some abstract creature weight';
    //private static $obj;

public function __construct($name,$color,$weight)
{
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
}
/* К сожалению не смотря на то что у нас есть конструктор мы не можем создать 
   объект обстрактного класса, даже через статический метод возврата объекта :
public static function returnObj(){
    return self::$obj = new AnimalAbstr();
}
*/
abstract function sayHello();
public static function meetingWithAbstractClass()
{
echo 'Hello!<br />I am '.self::$name.'<br/>My color is '.self::$color.'<br />My weight is '.self::$weight.'<hr/>';
}
}
?>
