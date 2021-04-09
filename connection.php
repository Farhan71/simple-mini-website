<?php
    $con = mysqli_connect("localhost","root","") or die("not connected");
    mysqli_select_db($con,"farhan") or die("Database not found");
    

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $query = "insert into contact(`name`,`email`,`subject`,`message`) values($name,$email,$subject,$message)";
        
        if(mysqli_query($con,$query)){
            header("Location:index.html?PostedSuccessfully");
        }
        else{
            header("Location:contact.html?ErrorWhilePosting");
        }
    }
?>