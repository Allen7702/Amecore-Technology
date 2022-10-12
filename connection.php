<?php
$name =filter_input(INPUT_POST, 'name');
$email =filter_input(INPUT_POST, 'email');
$date =filter_input(INPUT_POST, 'date');
$time =filter_input(INPUT_POST, 'time');
$service =filter_input(INPUT_POST, 'service');
$subject =filter_input(INPUT_POST, 'subject');
$message =filter_input(INPUT_POST, 'message');


 //Database connection
$host= "localhost";
$dbusername ="root";
$dbpassword= "";
$dbname="Amecore";
 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
 if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
 }else{
    $sql ="INSERT INTO Booking(name,email,date,time,service)
    values('$name','$email','$date','$time','$service')";

    $sql ="INSERT INTO contact(name,email,subject,message)
    values('$name','$email','$subject','$message')";

   $sql ="INSERT INTO newslatter(name,email)
   values('$name','$email')";

    if($conn-> query($sql)){
      echo "New record is inserted succesfully";
    }
    else{
      echo "Error".$sql."<br>".$conn->error;
    }
   
    $conn->close();
 }
?>