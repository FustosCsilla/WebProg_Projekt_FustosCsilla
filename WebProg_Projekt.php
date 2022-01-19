<?php

//példák a dokumentációban lévő kódokra

$a = 5;
$b = 4;
$c = $a + $b;
Echo $c; //9

$_some_value = 'abcde'; // valid
$1number = 17.2; // not valid!
$some$signs% = '*$%'; // not valid!
$go_2_home = "okay"; // valid
$go_2_Home = 'nope'; // this is a different variable
$isThisCamelCase = true; // camel case

$number = 456;
Var_dump($number);
$number = 'abcde';
var_dump($number); //int(456) string(5) "abcde"

$a = "2";
$b = 3;
var_dump($a + $b); // 5
var_dump($a . $b); // 23

$a = 20;
$b = 7; 
var_dump($a + $b); // 27
var_dump($a - $b); // 13
var_dump($a * $b); // 140
var_dump($a / $b); // 2.8571...
var_dump($a % $b); // 6
var_dump($a ** $b); // 1280^6
var_dump(-$a); // -20

$a = 10;
$a += 11; // same as $a = $a + 11;
var_dump($a);
$a -= 3; // same as $a = $a - 3;
var_dump($a);
$a *= 2; // same as $a = $a * 2;
var_dump($a);

var_dump(1 < 2); // true
var_dump(2 < 2); // false
var_dump(2 <= 2); // true
var_dump(3 <= 2); // false
var_dump(1 > 2); // false
var_dump(2 >= 2); // true
var_dump(2 > 2); // false
var_dump(2 <=> 3); // int less than 0
var_dump(2 <=> 2); // 0
var_dump(2 <=> 1); // int greater than 0

$a = 2;
$b = '2';
$c = 4;
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a != $b); // false
var_dump($a !== $b); // true
var_dump($a == $c); // false
var_dump($a <> $c); // true

var_dump(true && true); // true
var_dump(true && false); // false
var_dump(true || false); // true
var_dump(false || false); // false
var_dump(!false); // true

$a = 5;
$b = $a++; // $b is 5, $a is 6
var_dump($a, $b);
$b = ++$a; // $a and $b are 7
var_dump($a, $b);

$firstname = 'Yoo';
$surname = 'Taeyang';
echo 'I am ' . $firstname . ' ' . $surname . '!'; //I am Yoo Teyang!

$empty1 = [];
$empty2 = array();
$names1 = ['Ten', 'Lucas', 'YangYang'];
$names2 = array('Ten', 'Lucas', 'YangYang');
$status1 = [
    'name' => 'Johnny',
    'status' => 'singer'
];
$status2 = array(
    'name' => 'Johnny',
    'status' => 'singer'
);

$names[] = 'Johnny';
$status['age'] = 25;
print_r($names, $status);

unset($status['status']);
print_r ($status);

$string = '';
$array = [];
$names = ['Ten', 'Lucas', 'YangYang'];
var_dump(empty($string)); // true
var_dump(empty($array)); // true
var_dump(empty($names)); // false
var_dump(isset($names[2])); // true
var_dump(isset($names[3])); // false

$names = ['Ten', 'Lucas', 'YangYang'];
$containsHermione = in_array('YangYang', $names);
var_dump($containsHermione); // true
$containsSnape = in_array('Renjun', $names);
var_dump($containsSnape); // false
$wheresRon = array_search('Lucas', $names);
var_dump($wheresRon); // 1
$wheresVoldemort = array_search('Kun', $names);
var_dump($wheresVoldemort); // false

$properties = [
    'firstname' => 'Matthew',
    'surname' => 'Big',
    'house' => 'LA'
];
$properties1 = $properties2 = $properties3 = $properties;
sort($properties1);
var_dump($properties1);
asort($properties3);
var_dump($properties3);
ksort($properties2);
var_dump($properties2);
 
$names = ['Ten', 'Lucas', 'YangYang'];
$size = count($names);
var_dump($size); // 3

$dancer = ['Ten', 'Lucas', 'YangYang'];
$singer = ['Kun', 'XiaoJun', 'Hendery'];
$all = array_merge($good, $bad);
var_dump($all);
