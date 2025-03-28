
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dash-style.css">
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
                <h3>Dashboard</h3>
            </div>
            <div class="add-search">
                <div class="search1">
                    <input type="text" id="search" name="search" placeholder="search">
                    <button><img src="search (2).png" height="15px"></button>
                </div>
        </div>

        <div class="ta-container">
            <div class="head-ta">
         
            </div>
            <table>
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Gender</th>
                    <th>Contact No.</th>
                    <th>Date Added</th>
                    
                </tr>
                </thead>
               <tbody>
               <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "brghealth";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM patient_info";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["patient_id"]."</td>";
                                echo "<td>".$row["patient_lname"]."</td>";
                                echo "<td>".$row["patient_fname"]."</td>";
                                echo "<td>".$row["patient_mname"]."</td>";
                                echo "<td>".$row["patient_gender"]."</td>";
                                echo "<td>".$row["patient_num"]."</td>";
                                echo "<td>".$row["patient_date"]."</td>";
                                echo "</tr>";
                            }
                        } 
                        $conn->close();
                        ?>
               </tbody>
               
               </table>
    
        </div>
    </div>
 
</body>
</html>