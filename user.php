<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','test1');
    if(!$con){
      die(mysqli_error($con));
    }
    else{
     // echo "Connected suuccssfully";
    }
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $message=$_POST['msg'];

    $qry="Insert into `test`(`name`,`email`,message) values('$name','$mail','$message')";
    $res=mysqli_query($con,$qry);

    if($res){
        //echo("Record inserted successfully");
        header('location:user.php');
    }
    else{
        die(mysqli_error($res));
    }
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container lg md-6">
        <form class="form" method="post">
            <h4 class="mt-3 text-center">Submission Form</h4>
            <div>
                <label>Name:</label>
                <input class="ml-3 mt-3" type="text" name="name" placeholder="Enter your Name: " required>
            </div>
            <div>
                <label>Email:</label>
                <input class="ml-3 mt-3" type="email" name="mail" placeholder="Enter your Email: " required>
            </div> 
            <div>
                <label>Message:</label>
                <textarea class="ml-3 mt-3" placeholder="Enter here: " name="msg"></textarea>
            </div>  
            <button class="btn bg-primary ml-5 my-3" name="submit">Submit</button>    
        </form>
        
    </div>
    
</body>
</html>