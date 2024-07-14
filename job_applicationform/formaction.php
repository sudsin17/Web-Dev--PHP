<?php
if(isset($_POST['submit'])){
$firstname = $_POST['first_name'];
$lastname =  $_POST['last_name'];
$email =  $_POST['email'];
$city =  $_POST['city'];
$address =  $_POST['address'];
$pincode =  $_POST['pincode'];
$job_role =  $_POST['job_role'];
$date =  $_POST['date'];



$servername = "localhost";
$username = "root";
$password = "";
$database = "job_app_details";


$conn = mysqli_connect($servername, $username, $password, $database);
 $sql = " INSERT INTO `employee_details`( `Firstname`, `Lastname`, `email`, `Working_Feild`, `Address`, `City`, `Pincode`, `WorkingDate`) 
VALUES ('$firstname','$lastname','$email','$job_role','$address','$city','$pincode','$date')";

mysqli_query($conn,$sql);

if(mysqli_query($conn, $sql)){
    echo "<p>Data submitted successfully!</p>";
} 
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}













?>


