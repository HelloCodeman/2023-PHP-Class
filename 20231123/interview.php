<?php

/* 
請用你熟悉的語言，描述貓與狗物件

方向: 物件、繼承、介面
物件: 動物、貓、狗
介面: 叫
*/


class Animal
{
}

interface bark
{
    function b();
}

class Dog extends Animal implements bark
{
    function b()
    {
        return"汪";
    }
}

class Cat extends Animal implements bark
{
    function b()
    {
        return "喵";
    }
}

$dog=new Dog();
$cat=new Cat();

echo $dog->b();
echo "<br>";
echo $cat->b();
