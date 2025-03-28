<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brghealth";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit-edit'])){
    if(isset($_GET['patientId'])){
        $id = $_GET['patientId'];
      }
    
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $midname = $_POST['midname'];
      $mobilenum = $_POST['mobilenum'];
      $address = $_POST['address'];
      $age = $_POST['age'];
      $bday = $_POST['bday'];
      $bplace = $_POST['bplace'];
      $status1 = $_POST['status1'];
      $gender1 = $_POST['gender1'];
      $religion = $_POST['religion'];
      $occu = $_POST['occu'];
      $date1 = $_POST['date1'];
      $complaint = $_POST['complaint'];
      $examination = $_POST['examination'];
      $history = $_POST['history'];
      $treatment = $_POST['treatment'];
      $allergies1 = $_POST['allergies1'];
      $bp = $_POST['bp'];
      $rr = $_POST['rr'];
      $cr = $_POST['cr'];
      $temp = $_POST['temp'];
      $weight1 = $_POST['weight1'];
      $pr = $_POST['pr'];
      $physician = $_POST['physician'];
     
    
      $query = "UPDATE patient_info SET patient_lname = '$lastname', patient_fname = '$firstname',
                       patient_mname = '$midname', patient_num = '$mobilenum', patient_address = '$address',
                       patient_age = '$age', patient_bday = '$bday', patient_bplace = '$bplace', 
                       patient_cstatus = '$status1', patient_gender = '$gender1', patient_religion = '$religion',
                       patient_occupation = '$occu', patient_date = '$date1', complaint = '$complaint',
                       exam = '$examination', history = '$history', treatment = '$treatment', allergies = '$allergies1',
                       blood_pressure = '$bp', respiratory = '$rr', refill = '$cr', temperature = '$temp',
                       weight1 = '$weight1', pulse = '$pr', physician = '$physician'  WHERE patient_id = '$id'";
    
    
       $result = mysqli_query($conn, $query);
    
       if(!$result){
         die("query failed");
       }else{
          header('Location: patient-list.php'); 
       }
    
    
       
    
}


?>

