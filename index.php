<?php
$msg = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
$servername="localhost";
$username ="root";
$password ="";
$database ="ustrip";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "connection is unsuccessfull due to this error --->".mysqli_conn_error($conn);
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `ustrip` (`name`, `age`, `gender`, `email`, `phone_no`, `description`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
$result = mysqli_query($conn,$sql);
if($result){
    $msg = true;
    

}

else{
    echo " Error! form not submitted.";
}
}
?>







<?php
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC Bose Universitiy Of Science And Technology YMCA,Faridabad (US Trip Form)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img  class="bg" src="bgg.jpg" alt="jc boseust">
    <div class="container">
        <h1> Welcome to JC BOSE UNIVERSITY OF SCIENCE AND TECHNOLOGY US Trip Form</h1>
        <p>Enter your details and submit your form to confirm your participation in the trip</p>';
        ?>
        <?php 
        if($msg == true)
        echo '<p class="green"> Thanks For Submitting Your Form . We are happy to see you joining us for US Trip.</p>';
        ?>

    <?php 
    echo '</div>
        <form action="http://localhost/php project/index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email Address">
            <input type="phone"  maxlength="10" name="phone" id="phone" placeholder="Enter your Phone Number">
            <textarea id="desc" name="desc" cols="30" rows="10"
                placeholder="Enter any other infromation here"></textarea>
                <button class="btn"> Submit </button>

        </form>
    </div>
</body>

</html>';
?>