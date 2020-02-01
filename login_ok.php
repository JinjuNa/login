<?php

//  if(!isset($_POST['is_ajax'])) exit;
//무슨의미지 isset 있는지 없는지.
//  if(!isset($_POST['Id'])) exit;
//  if(!isset($_POST['Pw'])) exit;
//$_POST ... javscript ... html
//input으로 입력받은값


$is_ajax = $_POST['is_ajax'];
$Id = $_POST['Id'];
$Pw = $_POST['Pw'];

// $Id = 'dindoo';
// $Pw = '12345678';
//이부분은 mysql 연동해야할것 같은데.

        $host = 'localhost';
        $user = 'root';
        $password = 'aa950307';
        $dbname = 'board';
        $mysqli = new mysqli($host, $user, $password, $dbname);

        // 연결 오류 발생 시 스크립트 종료
        if ($mysqli->connect_errno) {
            die('Connect Error: '.$mysqli->connect_error);
        }

        $sql = "select * from login where UserId = '$Id' and Pw = '$Pw'";

        $select_data = mysqli_query($mysqli, $sql);

        $row = mysqli_fetch_array($select_data);

        // echo '$row : ';

        // print_r($row);
     
        // echo '<br>';

        if($row){
            echo "success";
        }else{
            echo "fail";
        }
        //echo $select_data['UserId'];
        //echo "hello";

        // session_start();
        
        // if($row=mysql_fetch_array($select_data))
        // {
        //     // $_SESSION['Id']=$row['Id'];
        //     echo "success";
        // }
        // else
        // {
        //     echo "fail";
        // }

        // exit();
// $members = [
//     'user1' => ['pw'=>'0000', 'name' => '강호동'],
//     'user2' => ['pw'=>'0000', 'name' => '유재석'],
//     'user3' => ['pw'=>'0000', 'name' => '박명수']
// ];
//배열의 이중구조

// if(!$is_ajax) exit;
// if(!isset($select_data[$Id])) exit;
// if($select_data[$Id]['Pw'] != $Pw) exit;
// setcookie('UserId', $Id);
// setcookie('Name', $members[$Id]['name']);

// echo "success";

?>