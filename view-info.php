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

  $query = "SELECT * FROM patient_info WHERE patient_id='$id'";
  $result = mysqli_query($conn, $query);

  if(!$result){
    die("query failed");
  }else{
    $row = mysqli_fetch_assoc($result);

    
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="view-info.css">
     <style>
        .edit button{
            cursor:pointer;
            transition: background-color 0.15s;
        }
        .edit button:hover{
            background-color: rgb(72, 72, 245);
        }
        .edit button:active{
            background-color: rgb(151, 151, 250);
        }
        .delete button {
            cursor:pointer;
            transition: background-color 0,15s;
        }
        .delete button:hover {
            background-color: rgb(238, 57, 57);
        }
        .delete button:active {
            background-color: rgb(243, 106, 106);
        }
     </style>
</head>
<body>
    <div class="container">
        <div class="panel">
            <div><img src="DOH.png" height="90PX"></div>
            <h4>BARANGAY HEALTH CENTER<BR>PATIENT RECORD</h4>
        </div>
        <div class="panel">
            <a href="dash.php">
                <div><img src="dash.png" height="40px"></div>
                <div>Dashboard</div>
            </a>     
        </div>
        <div class="panel">
            <a href="patient-list.php">
                <div><img src="patient.png" height="40px"></div>
                <div>Patient Record <br>Table</div>
            </a>   
        </div>
        <div class="panel">
            <a href="report.php">
                <div><img src="report.png" height="40px"></div>
                <div>Reports</div>
            </a>  
        </div>
        <div class="panel">
            <div>
                <a href="profile.php"><img src="account.png" height="50"></a>
            </div>

            <div>
                <a href="logout.php">
                    <div>Logout</div>
                </a>  
            </div>
        </div>

        <div class="panel">
            <div class="title">
                <h3>Patient's Information</h3>
            </div>

            <div id="imageBox">
                <h4 onclick="chooseFile()">Insert image here</h4>
                <input type="file" id="fileInput" style="display: none;" accept="image/*">    
            </div>
   <form action="edit-record.php?patientId=<?php echo $id; ?>" method="post">
        <div class="info-container">
 
            <div>
                <label for="patientID">Patient ID</label><br>
                <input class="input1" type="number" id="patientID" name="patientID" value="<?php echo $row['patient_id']?>">
            </div>
     
            <div>
                <label for="lastname">Last name</label><br>
                <input class="input1" type="text" id="lastname" name="lastname" value="<?php echo $row['patient_lname']?>">
            </div>

            <div>
                <label for="firstname">First name</label><br>
                <input class="input1" type="text" id="firstname" name="firstname" value="<?php echo $row['patient_fname']?>">
            </div>

            <div>
                <label for="midname">Middle name</label><br>
                <input class="input1" type="text" id="midname" name="midname" value="<?php echo $row['patient_mname']?>" >
            </div>
             
        </div>

        <div class="info-container2">

            <div>
                <label for="mobilenum">Mobile No.</label><br>
                <input class="input1" type="number" id="mobilenum" name="mobilenum" value="<?php echo $row['patient_num']?>">
               </div>

            <div>
                <label for="address">Address</label><br>
                <input class="input2" type="text" id="address" name="address" style="width: 485px;" value="<?php echo $row['patient_address']?>">
            </div>

        </div>

        <div class="info-container3">
            <div>
                <label for="age">Age</label><br>
                <input class="input3" type="number" id="age" name="age" style="width: 51px;" value="<?php echo $row['patient_age']?>">
               </div>

               <div>
                <label for="bday">Birthday</label><br>
                <input class="input3" type="date" id="bday" name="bday" value="<?php echo $row['patient_bday']?>">
               </div>

               <div>
                <label for="bplace">Birth place</label><br>
                <input class="input3" type="text" id="bplace" name="bplace" value="<?php echo $row['patient_bplace']?>">
               </div>

               <div>
                <label for="civstatus">Civil status</label><br>
                <select class="input3" id="status1" name="status1">';
                               
                                <option value="<?php echo $row["patient_cstatus"]; ?>">
                               <?php echo $row["patient_cstatus"]; ?>
                               </option>
                                <option value="Single">Single</option>';
                                <option value="Married">Married</option>';
                                <option value="Divorced">Divorced</option>';
                                <option value="Widowed">Widowed</option>';
                               </select><br>
               </div>

               <div>
                <label for="gender">Gender</label><br>
                <select class="input3" id="gender1" name="gender1">';
                               
                                <option value="<?php echo $row["patient_gender"]; ?>">
                               <?php echo $row["patient_gender"]; ?>
                               </option>
                                <option value="Male">Male</option>';
                                <option value="Female">Female</option>';
                               
                               </select><br>
               </div>
           </div>

           <div class="info-container4">
            <div>
                <label for="religion">Religion</label><br>
                <input class="input3" type="text" id="religion" name="religion" value="<?php echo $row['patient_religion']?>">
               </div>
             
               <div>
                <label for="occu">Occupation</label><br>
                <input class="input3" type="text" id="occu" name="occu" value="<?php echo $row['patient_occupation']?>">
               </div>

               <div>
                <label for="date1">Date</label><br>
                <input class="input3" type="date" id="date1" name="date1" value="<?php echo $row['patient_date']?>">
               </div>

           </div>

          <div class="h2-container">
            <h2>OPD findings</h2>
          </div>
           
           <div class="info-container5">
            
            <div>
                <label for="complaint">Chief complaint</label><br>
                <textarea id="complaint" name="complaint" rows="5" cols="50"><?php echo $row['complaint']; ?></textarea>
            </div>

            <div>
                <label for="examination">Physical examination</label><br>
                <textarea id="examination" name="examination" rows="5" cols="50"><?php echo $row['exam']; ?></textarea>
            </div>

            <div>
                <label for="history">History of present illness</label><br>
                <textarea id="history" name="history" rows="5" cols="50"><?php echo $row['history']; ?></textarea>
            </div>

            <div>
                <label for="treatment">Medical treatment</label><br>
                <textarea id="treatment" name="treatment" rows="5" cols="50"><?php echo $row['treatment']; ?></textarea>
            </div>
           </div>
           
           <div class="info-container6">
            <div>
                <label for="allergies">Allergies</label><br>
                <select class="input3" id="allergies1" name="allergies1">';
                <option value="<?php echo $row["allergies"]; ?>">
                               <?php echo $row["allergies"]; ?>
                               </option>
                                <option value="Peanut">Peanut</option>';
                                <option value="Milk">Milk</option>';
                                <option value="Fish">Fish</option>';
                                <option value="Egg">Egg</option>';
                                <option value="Wheat">Wheat</option>';
                                <option value="Any other">Any other</option>';
                </select>
            </div>

            <div>
                <label for="bp">Blood pressure</label><br>
                <input class="input4" type="number" id="bp" name="bp" value="<?php echo $row['blood_pressure']?>">
            </div>

            <div>
                <label for="rr">Respiratory rate</label><br>
                <input class="input4" type="number" id="rr" name="rr" value="<?php echo $row['respiratory']?>">
            </div>

            <div>
                <label for="cr">Capillary refill</label><br>
                <input class="input4" type="number" id="cr" name="cr" value="<?php echo $row['refill']?>">
            </div>

            <div>
                <label for="temp">Temperature</label><br>
                <input class="input4" type="number" id="temp" name="temp" value="<?php echo $row['temperature']?>">
            </div>

            <div>
                <label for="weight">Weight</label><br>
                <input class="input4" type="number" id="weight" name="weight" value="<?php echo $row['weight1']?>">
            </div>

            <div>
                <label for="pr">Pulse rate</label><br>
                <input class="input4" type="number" id="pr" name="pr" value="<?php echo $row['pulse']?>">
            </div>

            <div>
                <label for="physician">Attending physician</label><br>
                <input class="input1" type="text" id="physician" name="physician" value="<?php echo $row['physician']?>">
               </div>
    
           </div>

           <div class="buttonss">
            <div class="edit">
            <button type="submit" name="submit-edit" >Update</button>
            </div>
           
           
            <div class="delete">
            <button type="submit" name="submit-delete" >Delete</button>
           

            </div>
           </div>
           </div>
           </form>
        </div>
        

    <script>
        
    document.querySelector(".delete button").addEventListener("click", function() {
        var confirmation = confirm("Are you sure you want to delete this record?");
        if (confirmation) {
            document.querySelector("form").action = "delete-record.php?patientId=<?php echo $id; ?>";
            document.querySelector("form").submit();
        }else{
            event.preventDefault();
        } 

       
    });


    document.querySelector(".edit button").addEventListener("click", function() {
        var confirmation = confirm("Are you sure you want to Update this record?");
        if (confirmation) {
            document.querySelector("form").action = "edit-record.php?patientId=<?php echo $id; ?>";
            document.querySelector("form").submit();
        }else{
            event.preventDefault();
        } 

       
    });




       

        function chooseFile() {
            document.getElementById('fileInput').click();
        }

        document.getElementById('fileInput').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const img = document.createElement('img');
                    img.src = event.target.result;
                    document.getElementById('imageBox').innerHTML = '';
                    document.getElementById('imageBox').appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });
    

    </script>
</body>
</html>