<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="report-style.css">
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
                <h3>Patient's Records Report</h3>
            </div>
           
        <div class="ta-container">
          
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient's Name</th>
                    <th>Patient's Illness</th>
                    <th>Date Registered</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    

                    
                  </tr>
                
               </table>

        </div>
         
        <div class="printss">
            <button class="print">Print</button>
        </div>
        
          
        </div>
    </div>
</body>
</html>