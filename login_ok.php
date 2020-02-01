<?php

 if(!isset($_POST['is_ajax'])) exit;
//무슨의미지 isset 있는지 없는지.
 if(!isset($_POST['Id'])) exit;
 if(!isset($_POST['Pw'])) exit;
//$_POST ... javscript ... html
//input으로 입력받은값


$is_ajax = $_POST['is_ajax'];
$Id = $_POST['Id'];
$Pw = $_POST['Pw'];


//이부분은 mysql 연동해야할것 같은데.
$members = [
    'user1' => ['pw'=>'0000', 'name' => '강호동'],
    'user2' => ['pw'=>'0000', 'name' => '유재석'],
    'user3' => ['pw'=>'0000', 'name' => '박명수']
];
//배열의 이중구조

if(!$is_ajax) exit;
if(!isset($members[$Id])) exit;
if($members[$Id]['pw'] != $Pw) exit;
setcookie('Id', $Id);
setcookie('Name', $members[$Id]['name']);

echo "success";

?>