<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brghealth";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['patientId'])){
   $id = $_GET['patientId']; 
}


$query = "DELETE FROM patient_info WHERE patient_id = '$id'"; 

$result = mysqli_query($conn, $query);


if (!$result){
    die("Query failed");
} else 
    header('Location: patient-list.php'); 


$conn->close();
?>

