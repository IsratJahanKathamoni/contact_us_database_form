<?php
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$mobile_number=$_POST["mobile"];
$massage=$_POST["massage"];
$conn= mysqli_connect("localhost","root","","database_contact_form")
or die("Couldn't connect to database");

$sql ="INSERT INFO database_table(first_name,last_name,email,monile_number,massage) VALUES('{$firstname}','{$lastname}','{$email},'{$mobile_number}','{$massage})";
$result = mysqli_query($conn,$sql) or die("Couldn't execute");	

mysqli_close($conn);
?>