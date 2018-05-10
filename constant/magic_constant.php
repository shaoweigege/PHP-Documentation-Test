﻿<?php

    // 魔术常量
    
    // PHP 向它运行的任何脚本提供了大量的预定义常量。不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，或者动态加载后，或者在编译时已经包括进去了。
    
    // 有八个魔术常量它们的值随着它们在代码中的位置改变而改变。例如 __LINE__ 的值就依赖于它在脚本中所处的行来决定。这些特殊的常量不区分大小写，如下：

    // 几个 PHP 的“魔术常量”
    
    // __LINE__ 文件中的当前行号。
    // __FILE__ 文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径），而在此之前的版本有时会包含一个相对路径。
    // __DIR__  文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增）
    // __FUNCTION__ 函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。
    // __CLASS__    类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。类名包括其被声明的作用区域（例如 Foo\Bar）。注意自 PHP 5.4 起 __CLASS__ 对 trait 也起作用。当用在 trait 方法中时，__CLASS__ 是调用 trait 方法的类的名字。
    // __TRAIT__    Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4 起此常量返回 trait 被定义时的名字（区分大小写）。Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
    // __METHOD__   类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
    // __NAMESPACE__    当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。

    // get_class()，get_object_vars()，file_exists() 和 function_exists()。

    # 1
    class trick
    {
        function doit()
        {
            echo __FUNCTION__;
        }
        function doitagain()
        {
            echo __METHOD__;
        }
    }
    $obj=new trick();
    $obj->doit(); // doit

    echo "<br />";

    $obj->doitagain(); // trick::doitagain

    echo "<hr>";

    #2
    class base_class
    {
        function say_a()
        {
            echo "'a' - said1 the " . __CLASS__ . "<br />";
        }

        function say_b()
        {
            echo "'b' - said1 the " . get_class($this) . "<br />";
        }
    }

    class derived_class extends base_class
    {
        function say_a()
        {
            parent::say_a();
            echo "'a' - said2 the " . __CLASS__ . "<br />";
        }

        function say_b()
        {
            parent::say_b();
            echo "'b' - said2 the " . get_class($this) . "<br />";
        }
    }
    

    $obj_b = new derived_class();

    $obj_b->say_a(); // 'a' - said1 the base_class
                     //'a' - said2 the derived_class
    echo "<br/>";
    $obj_b->say_b(); // 'b' - said1 the derived_class
                     // 'b' - said2 the derived_class










?>