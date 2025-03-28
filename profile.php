<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile-style.css">
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
                <a href=""><img src="account.png" height="50"></a>
            </div>

            <div>
                <a href="logout.php">
                    <div>Logout</div>
                </a>  
            </div>
        </div>

        <div class="panel">
            <div class="title">
                <h3>Admin Profile</h3>
            </div>

            
            <div id="imageBox">
                <h4 onclick="chooseFile()"><img src="account.png" height="100px"></h4>
                <input type="file" id="fileInput" style="display: none;" accept="image/*">    
            </div>
         
            <div class="container-input">
                <div>
                    <label for="">Name</label><br>
                    <input type="text" id="name">
                </div>
    
                <div>
                    <label for="">Contact No</label><br>
                    <input type="number" id="contact">
                </div>
    
                
            </div> 

            <div class="container-input">

                <div>
                    <label for="">Email</label><br>
                    <input type="text" id="email">
                </div>
    
                <div>
                    <label for="">Address</label><br>
                    <input type="text" id="address">
                </div>
    
            </div>

            <div>
                
              <div class="container-input">
                <div>
                    <label for="">Password</label><br>
                    <input type="password" id="password">
                </div>
    
                <div>
                    <label for="">Gender</label><br>
                    <input type="text" id="address">
                </div>
              </div>

              <div class="container-save-and-change-button">
                   <button>Save</button>
                   <button>Change</button>
              </div>

                <div class="button">
                    <button>Logout</button>
                </div>
    
            </div>
            
    </div>

    
    <script>
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