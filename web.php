<?php 
require 'pdo.php';

if(isset($_POST['name'])&& isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = ('insert into examples(name,email) values( :name ,:email)');
    $smt =$pdo->prepare($sql);
    $smt->execute(array(
':name-'=>$_POST['name'],
':email'=>$_POST['email']
    ));
}



?>