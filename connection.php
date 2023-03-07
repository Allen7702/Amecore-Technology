<?php
// Store user input into variables
$name =filter_input(INPUT_POST, 'name');
$email =filter_input(INPUT_POST, 'email');
$username =filter_input(INPUT_POST, 'username');
$useremail =filter_input(INPUT_POST, 'useremail');
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
} else {
 
 // Determine which form was submitted and create the appropriate SQL statement
 if (isset($_POST['booking_form'])) {
  $sql = "INSERT INTO Booking (name,email,date,time,service) VALUES ('$name','$email','$date','$time','$service')";
} elseif (isset($_POST['contact_form'])) {
  $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
} elseif (isset($_POST['newsletter_form'])) {
  $sql = "INSERT INTO newslatter (username,useremail) VALUES ('$username','$useremail')";
}

// Execute the SQL statement
if ($conn->query($sql)) {
  // Redirect back to the referring page with a success message
  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?success=1');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();



}
 
?>