
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Notes</title>
    
   
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 350;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    
    overflow: hidden;
}


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 80vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 10px;
}

.form-content .form-items {
    border: 4px solid #366de6;
    padding: 40px;
    display: inline-block;
    width: 95%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 20px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 5px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #ffffff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 90%;
    padding: 7px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #dde8ec;
    font-size: 15px;
    font-weight: 300;
    color: #1d31e9;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 90%;
    padding: 8px 18px;
    border-radius: 5px;
    text-align: left;
    background-color: #f3f0f0;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 100px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -10px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}
.scrollable-content {
    height: 100vh; /* Adjust the height as needed */
    overflow-y: auto; /* Enable vertical scrolling */
}



    </style>
</head>
<body>
<div class="scrollable-content">
    
<div class="form-body" style="background-color: #152733;">
    <div class="row">
        <div class="form-holder d-flex align-items-center">
            <div class="form-content">
                <div class="form-items">
                    <h3>Input Form</h3>
                    <p>Fill in the data below.</p>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-12"> <label for="year">Year:</label>
                            <select class="form-select mt-3" id="year" name="year" required>
                                <option selected disabled value="">Year</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="col-md-12"> <label for="semester">Sem:</label>
                            <select class="form-select mt-3" id="semester" name="sem" required disabled>
                                <option selected disabled value="">Semester</option>
                            </select>
                        </div>
                        <div class="col-md-12"> <label for="sub">Sub:</label>
                            <select class="form-select mt-3" id="subject" name="subject" required>
                                <option selected disabled value="">subject</option>
                                <option value="1">m1</option>
                                <option value="2">m3</option>
                                <option value="3">python</option>
                                <option value="4">c</option>
                                <option value="5">html</option>
                            </select>
                        </div>
                        

                        <div class="col-md-12"> <label for="unit">Unit:</label>
                            <select class="form-select mt-3" id="unit" name="unit" required>
                                <option selected disabled value="">Unit</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div><br>
                        <div class="col-md-12" style="background-color: #dde8ec; margin: 0 50px 0 0; padding: 10px;">
                        <label for="year" style="color:#152733">PDF:</label> <input   class="form-control mt-3" type="file" id="pdf" name="pdf" accept=".pdf" required>
                        </div>
                        <br>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    // JavaScript to dynamically update the semester options based on the selected year
    document.getElementById('year').addEventListener('change', function () {
        var yearSelect = document.getElementById('year');
        var semesterSelect = document.getElementById('semester');

        // Disable semester select by default
        semesterSelect.innerHTML = '';
        semesterSelect.disabled = true;

        if (yearSelect.value === '1') {
            // Add semester options for year 1
            addSemesterOption(1, '1');
            addSemesterOption(2, '2');
        } else if (yearSelect.value === '2') {
            // Add semester options for year 2
            addSemesterOption(3, '3');
            addSemesterOption(4, '4');
        }
        else if (yearSelect.value === '3') {
            // Add semester options for year 3
            addSemesterOption(5, '5');
            addSemesterOption(6, '6');
        }else if (yearSelect.value === '4') {
            // Add semester options for year 4
            addSemesterOption(7, '7');
            addSemesterOption(8, '8');
        } // Add more conditions for other years if needed

        function addSemesterOption(value, text) {
            var option = document.createElement('option');
            option.value = value;
            option.text = text;
            semesterSelect.appendChild(option);
        }

        // Enable the semester select after a year is selected
        semesterSelect.disabled = false;
    });
    
</script>
<script>
    document.getElementById('year').addEventListener('change', updateSubjectOptions);
    document.getElementById('semester').addEventListener('change', updateSubjectOptions);

    function updateSubjectOptions() {
        const yearSelect = document.getElementById('year');
        const semesterSelect = document.getElementById('semester');
        const subjectSelect = document.getElementById('subject');

        const year = yearSelect.value;
        const semester = semesterSelect.value;

        // Clear existing options
        subjectSelect.innerHTML = '<option selected disabled value="">Select a Subject</option>';

        // Define subject options based on year and semester
        const subjectOptions = {
            '1-1': ['ENGLISH', 'M1','CHEMISTRY', 'BASIC SIVIL & MECHANICAL ENGINEERING','CG','ES'],
            '1-2': ['M2', 'PHYSICS','BEEE', 'EG','DS'],
            '2-3': ['NMVC', 'MFCS','JAVA', 'DBMS','MEFA','EP'],
            '2-4': ['DSSM', 'CO','DAA', 'OS','CG','ES'],
            '3-5': ['DWDM', 'CAD','ML', 'PE-1','OE-1'],
            '3-6': ['CN', 'ATCD','SE', 'PE-2','OE-2'],
            '4-7': [],
            '4-8': [],
        };

        const key = year + '-' + semester;
        const options = subjectOptions[key];

        if (options) {
            options.forEach(subject => {
                const option = document.createElement('option');
                option.value = subject;
                option.text = subject;
                subjectSelect.appendChild(option);
            });
        }
    }

    // Initially update subject options when the page loads
    updateSubjectOptions();
</script>
<?php 
$rds_endpoint = getenv('RDS_ENDPOINT');
$servername = $rds_endpoint;;
$username = "admin";
$password = "lokesh123";
$dbname = "fullstack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $sub = $_POST['subject'];
    $unit = $_POST['unit'];
    $image = $_FILES['pdf']['name'];
    $target_dir = "upl/";
    $target_file = $target_dir . basename($_FILES["pdf"]["name"]);

    move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file);

    $update = "SELECT * FROM `notes` WHERE `sub`='$sub' AND `unit`='$unit'";
    $check = mysqli_query($conn, $update);

    if (mysqli_num_rows($check) > 0) {
        $quupdate = "UPDATE `notes` SET `pdf`='$image' WHERE `sub`='$sub' AND `unit`='$unit'";
        mysqli_query($conn, $quupdate);
        echo '<div style="text-align: center; color: #2acc80; font-weight: bold;"><h1>NOTES UPDATED SUCCESSFULLY</h1> </div>';
    } else {
        $insert = "INSERT INTO `notes` VALUES('$year','$sem','$sub','$unit','$image')";
        if ($conn->query($insert) === TRUE) {
            echo '<div style="text-align: center; color: #2acc80; font-weight: bold;"><h1>NOTES ADDED SUCCESSFULLY</h1> </div>';
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
<br><br>
</div>
</body>
</html>
