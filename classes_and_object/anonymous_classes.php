<?php
/*
 * 类与对象 - 匿名类
 */

// PHP7 开始支持匿名类。匿名类很有用，可以创建一次性的简单对象。

// PHP7 之前的代码
/*
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());
*/

// 使用了 PHP7+ 后的代码
/*
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});
*/

// 可以传递参数到匿名类的构造器，也可以扩展 (extend) 其他类、实现接口 (implement interface)，以及像其它普通的类一样使用 trait：

class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

var_dump(new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});
/**
 * Output:
object(class@anonymous)[1]
private 'num' => int 10
 */

echo '<hr>';

// 匿名类被嵌套进普通 Class 后，不能访问这个外部类 (Outer class) 的 private(私有)、protected(受保护)方法或者属性。为了访问外部类(Outer class)protected 属性或方法，匿名类可以 extend(扩展) 此外部类。为了使用外部类(Outer class)的 private 属性，必须通过构造器传进来：

class Outer
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Outer {
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

echo (new Outer)->func2()->func3(); // Output: 6

echo '<hr>';

// 声明的同一个匿名类，所创建的对象都是这个类的实例。
function anonymous_class()
{
    return new class {};
}

if (get_class(anonymous_class()) === get_class(anonymous_class())) {
    echo 'same class';
} else {
    echo 'different class';
}
/**
 * Output: same class
 */

echo '<hr>';

/**
 * Note:
 * 注意，匿名类的名称是通过引擎赋予的，如下例所示。由于实现的细节，不应该去依赖这个类名。
 */
echo get_class(new class {}); /* Output:
class@anonymousE:\WWW\mytest\github\PHP-Documentation-Test\classes_and_object\anonymous_classes.php005C0987*/




?>