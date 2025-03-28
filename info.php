<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="info-style.css">
    <style>
        button {
            cursor: pointer;
            transition: background-color 0.15s;
        }
        button:hover{
            background-color: rgb(89, 226, 89);
        }
        button:active{
            background-color: rgb(145, 243, 145);
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

       
        <form id="addRecordForm" action="info.php" method="post" onsubmit="return confirmAddRecord();">
        
        <div class="info-container">

            <div>
                <label for="patientID">Patient ID</label><br>
                <input class="input1" type="number" id="patientID" name="patientID">
            </div>
     
            <div>
                <label for="lastname">Last name</label><br>
                <input class="input1" type="text" id="lastname" name="lastname">
            </div>

            <div>
                <label for="firstname">First name</label><br>
                <input class="input1" type="text" id="firstname" name="firstname">
            </div>

            <div>
                <label for="midname">Middle name</label><br>
                <input class="input1" type="text" id="midname" name="midname">
            </div>
             
        </div>

        <div class="info-container2">

            <div>
                <label for="mobilenum">Mobile No.</label><br>
                <input class="input1" type="number" id="mobilenum" name="mobilenum">
               </div>

            <div>
                <label for="address">Address</label><br>
                <input class="input2" type="text" id="address" name="address" style="width: 485px;">
            </div>

        </div>

        <div class="info-container3">
            <div>
                <label for="age">Age</label><br>
                <input class="input3" type="number" id="age" name="age" style="width: 51px;">
               </div>

               <div>
                <label for="bday">Birthday</label><br>
                <input class="input3" type="date" id="bday" name="bday">
               </div>

               <div>
                <label for="bplace">Birth place</label><br>
                <input class="input3" type="text" id="bplace" name="bplace">
               </div>

               <div>
                <label for="civstatus">Civil status</label><br>
                <input class="input3" list="status" id="status1" name="status1">
                <datalist id="status">
                  <option value="Single">
                  <option value="Married">
                  <option value="Divorced">
                  <option value="Widowed">
                </datalist>
               </div>

               <div>
                <label for="gender">Gender</label><br>
                <input class="input3" list="gender" id="gender1" name="gender1">
                <datalist id="gender">
                  <option value="Male">
                  <option value="Female">
                </datalist>
               </div>
           </div>

           <div class="info-container4">
            <div>
                <label for="religion">Religion</label><br>
                <input class="input3" type="text" id="religion" name="religion">
               </div>
             
               <div>
                <label for="occu">Occupation</label><br>
                <input class="input3" type="text" id="occu" name="occu">
               </div>

               <div>
                <label for="date1">Date</label><br>
                <input class="input3" type="date" id="date1" name="date1">
               </div>

           </div>

          <div class="h2-container">
            <h2>OPD findings</h2>
          </div>
           
           <div class="info-container5">
            
            <div>
                <label for="complaint">Chief complaint</label><br>
                <textarea id="complaint" name="complaint" rows="5" cols="50"></textarea>
               
            </div>

            <div>
                <label for="examination">Physical examination</label><br>
                <textarea id="examination" name="examination" rows="5" cols="50"></textarea>
            </div>

            <div>
                <label for="history">History of present illness</label><br>
                <textarea id="history" name="history" rows="5" cols="50"></textarea>
            </div>

            <div>
                <label for="treatment">Medical treatment</label><br>
                <textarea id="treatment" name="treatment" rows="5" cols="50"></textarea>
            </div>
           </div>
           
           <div class="info-container6">
            <div>
                <label for="allergies">Allergies</label><br>
                <input class="input3" list="allergies" name="allergies1">
                <datalist id="allergies">
                  <option value="peanut">
                  <option value="milk">
                  <option value="fish">
                  <option value="egg">
                  <option value="wheat">
                  <option value="any other">
                </datalist>
            </div>

            <div>
                <label for="bp">Blood pressure</label><br>
                <input class="input4" type="number" id="bp" name="bp">
            </div>

            <div>
                <label for="rr">Respiratory rate</label><br>
                <input class="input4" type="number" id="rr" name="rr">
            </div>

            <div>
                <label for="cr">Capillary refill</label><br>
                <input class="input4" type="number" id="cr" name="cr">
            </div>

            <div>
                <label for="temp">Temperature</label><br>
                <input class="input4" type="number" id="temp" name="temp">
            </div>

            <div>
                <label for="weight">Weight</label><br>
                <input class="input4" type="number" id="weight1" name="weight1">
            </div>

            <div>
                <label for="pr">Pulse rate</label><br>
                <input class="input4" type="number" id="pr" name="pr">
            </div>

            <div>
                <label for="physician">Attending physician</label><br>
                <input class="input1" type="text" id="physician" name="physician">
               </div>
    
           </div>

           <div class="buttonadd">
          <!--   <button type="submit" name="submit">Add Record</button> -->
          <button type="submit" name="submit">Add Record</button>
           
           </div>
           </div>

        </div>
        </form>
            
       </div>
    <script>

            function confirmAddRecord() {
                var confirmation = confirm("Are you sure you want to add this record?");
                if (confirmation) {
                    return true; 
                } else {
                    return false; 
                }
            }

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

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "brghealth";
  $sql ="";
  
  $conn = new mysqli($servername, $username, $password, $db);
  
  if($conn->connect_error) {
      die("Connection Failed: ". $conn->connect_error);
  }
  
  
  if(isset($_POST['submit'])) {

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

      $sql = "INSERT INTO patient_info(patient_lname, patient_fname, patient_mname, patient_num, patient_address, patient_age, 
                          patient_bday, patient_bplace, patient_cstatus, patient_gender, patient_religion, patient_occupation, patient_date, complaint,
                          exam, history, treatment, allergies, blood_pressure, respiratory, refill, temperature, weight1, pulse, 
                          physician) 
              VALUES('$lastname', '$firstname', '$midname', '$mobilenum', '$address', '$age', '$bday', '$bplace', '$status1',
                     '$gender1', '$religion', '$occu', '$date1', '$complaint', '$examination', '$history', '$treatment', '$allergies1', 
                      '$bp', '$rr', '$cr', '$temp', '$weight1', '$pr', '$physician')";
  
    }

  

    if ($sql != "" && $conn->query($sql) === TRUE) {
       
        $isSuccess = true;
    } 

    ?>

