﻿<?php
	// 变量 基础
	// PHP 中的变量用一个美元符号后面跟变量名来表示。变量名是区分大小写的。
	// 变量名与 PHP 中其它的标签一样遵循相同的规则。一个有效的变量名由字母或者下划线开头，后面跟上任意数量的字母，数字，或者下划线。按照正常的正则表达式，它将被表述为：'[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'。
	// Note: 在此所说的字母是 a-z，A-Z，以及 ASCII 字符从 127 到 255（0x7f-0xff）。
	// Note: $this 是一个特殊的变量，它不能被赋值。

	// 变量默认总是传值赋值。那也就是说，当将一个表达式的值赋予一个变量时，整个原始表达式的值被赋值到目标变量。这意味着，例如，当一个变量的值赋予另外一个变量时，改变其中一个变量的值，将不会影响到另外一个变量。

	// PHP 也提供了另外一种方式给变量赋值：引用赋值。这意味着新的变量简单的引用（换言之，“成为其别名” 或者 “指向”）了原始变量。改动新的变量将影响到原始变量，反之亦然

	// 使用引用赋值，简单地将一个 & 符号加到将要赋值的变量前（源变量）。

	$foo = 'Bob';			  // 将 'Bob' 赋给 $foo
	$bar = &$foo;             // 通过 $bar 引用 $foo
	$bar = "My name is $bar"; // 修改 $bar 变量
	echo $bar; 				  // My name is Bob
	echo '<br />';
	// $foo 的值也被修改
	echo $foo; 				  //My name is Bob

	echo '<hr>';
	echo '<br />';
	// 有一点重要事项必须指出，那就是只有有名字的变量才可以引用赋值。
	$foo = 25;
	$bar1 = &$foo;	  // 合法的赋值
	// $bar2 = & (24 * 7); // 非法；引用没有名字的表达式

	function test()
	{
		return 25;
	}

	// $bar3 = &test();  // 非法

	echo '<hr>';
	echo '<br />';
	// 未初始化变量的默认值
	// 虽然在 PHP 中并不需要初始化变量，但对变量进行初始化是个好习惯。未初始化的变量具有其类型的默认值 - 布尔类型的变量默认值是 FALSE，整形和浮点型变量默认值是零，字符串型变量（例如用于 echo 中）默认值是空字符串以及数组变量的默认值是空数组。
	// 依赖未初始化变量的默认值在某些情况下会有问题，例如把一个文件包含到另一个之中时碰上相同的变量名。另外把 register_globals 打开是一个主要的安全隐患。使用未初始化的变量会发出 E_NOTICE 错误，但是在向一个未初始化的数组附加单元时不会。isset() 语言结构可以用来检测一个变量是否已被初始化。

?>