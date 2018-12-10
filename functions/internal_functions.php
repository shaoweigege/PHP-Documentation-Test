<?php

/*
 * 函数 - 内部(内置)函数
 */
// PHP 有很多标准的函数和结构。还有一些函数需要和特定地 PHP 扩展模块一起编译，否则在使用它们的时候就会得到一个致命的"未定义函数"错误。例如，要使用 image 函数中的 imagecreatetruecolor()，需要在编译 PHP 的时候加上 GD 的支持。或者，要使用 mysql_connect() 函数，就需要在编译 PHP 的时候加上 MySQL 支持。有很多核心函数已包含在每个版本的 PHP 中如 字符串 和 变量 函数。调用 phpinfo() 或者 get_loaded_extensions() 可以得知 PHP 加载了那些扩展库。同时还应该注意，很多扩展库默认就是有效的。PHP 手册按照不同的扩展库组织了它们的文档。请参阅 配置、安装 以及各自的扩展库章节以获取有关如何设置 PHP 的信息。

// 手册中如何阅读函数原型讲解了如何阅读和理解一个函数的原型。确认一个函数将返回什么，或者函数是否直接作用于传递的参数是很重要的。例如，str_replace() 函数将返回修改过的字符串，而 usort() 却直接作用于传递的参数变量本身。手册中，每一个函数的页面中都有关于函数参数、行为改变、成功与否的返回值以及使用条件等信息。了解这些重要的（常常是细微的）差别是编写正确的 PHP 代码的关键。

/**
 * Note:
 * 如果传递给函数的参数类型与实际的类型不一致，例如将一个 array 传递给一个 string 类型的变量，那么函数的返回值是不确定的。在这种情况下，通常函数会返回 NULL。但这仅仅是一个惯例，并不一定如此。
 */

// 参见 function_exists()，函数参考，get_extension_funcs() 和 dl()。

?>