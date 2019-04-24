<?php


//// Selecting from Database
include_once 'config.php';
$username = $_SESSION['username']; ///Verifying the logged in user
$sql = "INSERT INTO contacts(username, username_contact) VALUES('$username', 'test1')";
$stmt1 = $connect->prepare($sql);
$stmt1->bindValue(':username', $username);

$stmt1->execute();


header("location: my_details.php")


/*
if(isset($errMsg)){
    echo '<div style="color:green;text-align:center;font-size:17px;">'.$errMsg.'</div>';
}


$tempDir = 'temp/';
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$jobtitle = $row['jobtitle'];
$company = $row['company'];
$job_desc = $row['job_desc'];
$telephone = $row['telephone'];
$linkedin = $row['linkedin'];
$twitter = $row['twitter'];
$instagram = $row['instagram'];
$facebook= $row['facebook'];

*/
?>
