<?php
$fullname= $gender=$email=$number=$age="";

if($_SERVER['REQUEST_METHOD'] = "POST"){
$fullname = test_input($_POST['name']);
$number = test_input($_POST['number']);
$gender = test_input($_POST['gender']);
$age = test_input($_POST['age']);
$comment = test_input($_POST['comment']);
};

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};

?>
<h2>form validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
FULLNAME:<input type="text" name="name">
<br><br>
EMAIL:<input type="email" name="email">
<br><br>
NUMBER(optional):<input type="text" name="number">
<br><br>
COMMENT(optional):<input type="textarea" name="comment">
<br><br>
GENDER:
<input value="female" type="radio" name='female'>
<input value="male" type="radio" name='male'>
<br> <br>
<input type="submit" name="submit" value="submit">
</form>
