<!DOCTYPE HTML>
<html>
    <head>
</head>
<style>
.error{
    color:red;
}
</style>
<body?>
    <?php
    $nameErr = $emailErr= $gmailErr= $websiteError="";

    if($_SERVER['REQUEST_METHOD']= "POST"){
        IF(empty($_POST['name'])){
            $nameErr = "please enter correct information";
        }else{
            $name = test_input($_POST['name']);
            if(!preg_match("/^[a-zA-z-']+$/",$name)){
                $nameErr = "only letters and whitespaces are allowed";
            }

        }
    }


    if(empty($_POST['email'])){
        $emailErr = "valid email required";
    }
    else{
        $email = test_input($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr = "the email you enter is incorect";
        }
    }
    if(empty($_POST['website'])){
        $website = "";
    }else{
        $website = test_input($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www.\.)[-a-z0-9+&@#\/%?=~_|!:,.:]*[A-Z0-9+@#/%=~_\]/i",$website))
        $wwebsiteErr = "enter valid Website URL";
    }
    if(empty($_POST['comment'])){
        $commentErr = '';

    }else{
        $comment = test_input($_POST['comment']);

    }
    if(empty($_POST['gender'])){
        $genderErr = 'please select your gender';

    }else{
        $gender = test_input($_POST['gender']);

    }


    function test_input($data){
        $data= trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <h2> php validation data</h2>
    <p><span class="error">*required field</span></p>
    <form method="post" action="echo htmlspecialchars($_POST['PHP_SELF']);?>">
         FULLNAME:<input type="text" name="name">
<br><br>
EMAIL:<input type="text" name="email">
<br><br>
<br><br>
COMMENT(optional):<input type="textarea" name="comment">
website:<input type="text" name="website">
<br><br>
GENDER:
<input value="female" type="radio" name='female'>
<input value="male" type="radio" name='male'>
<br> <br>
<input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h2> your out put</h2>";
echo $name;
echo $email;
echo $website;
echo $comment;
echo $gender;

?>
</body>
</html>
