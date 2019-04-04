<?php
session_start();
require_once("includes/settings.php");
require_once("includes/database.php");
require_once("includes/functions/common.php");
require_once("includes/classes/db.cls.php");
require_once("includes/classes/sitedata.cls.php");

$db = new SiteData();
$sql = "SELECT * FROM all_jobs";

$res = $db->getData($sql);
$sql1 = "SELECT * FROM registered_companies";
$result = $db->getData($sql1);
$sql2 = "SELECT * FROM program";
$result1 = $db->getData($sql2);
$sql3 = "SELECT * FROM branch";
$result2 = $db->getData($sql3);
$sql4 = "SELECT * FROM posted_jobs_B_P";
$result3 = $db->getData($sql4);


if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    
    
    $id = $_POST['Company_Id'];
    $title = $_POST['Job_Title'];
    $des = $_POST['Job_Description'];
    $cgpa = $_POST['CGPA_Requirement'];
    $program = $_POST['Program'];
   // $branch = $_POST['Branch'];
    $app_period = $_POST['Application_Period'];
    $package = $_POST['Minimum_Package_Offered'];
    $pptdate = $_POST['ppt_date'];
    $test = $_POST['test_date'];
    $interview = $_POST['interview_date'];
    $shortlist = $_POST['shortlist_date'];
    $year = $_POST['academic_year'];


    // $q7 = "select * from program where p_code='$program'";
    // $comp_info5 = $db->getData($q7);
    // pr($comp_info5);
   
    // $program_code = $comp_info5['oDATA'][0]['p_code'];
    echo $_POST['Branch'];



        foreach ($_POST['Branch'] as $value ) {
            
        
           // $branch_code = $db->getData("select * from branch where b_name='$value'")['oDATA'][0]['b_code'];


            $q9 = "select * from posted_jobs_B_P where company_id='$id' AND program_code= '$program' AND branch_code = '$value'";
            $posted = $db->getData($q9);

            if(intval($posted['NO_OF_ITEMS'])!=0){

               
                
                echo "<script type='text/javascript'>
               alert('Job already present!');
                </script>";
               }
            
            else{
           
           
            $query2="INSERT INTO posted_jobs_B_P (company_id, branch_code, program_code) VALUES ('$id','$value','$program')";
            mysql_query($query2);

            $q10 = "select * from all_jobs where company_id='$id'";
            $all_jobs= $db->getData($q10);
            
            if(intval($all_jobs['NO_OF_ITEMS'])==0){
            $query = "INSERT INTO all_jobs ( company_id , job_title , job_description,cgpa_requirement ,application_period, min_package_offered , ppt_date, test_date, interview_date, shortlisting_date ,academic_year) VALUES ( '$id' , '$title' ,'$des' , '$cgpa' , '$app_period', '$package' , '$pptdate', '$test', '$interview', '$shortlist', '$year')";
            mysql_query($query);    
        }
           
                redirect('PostedJobs.php');
    
        
            }
        }
       


    }

include('includes/templates/top_bar_admin.php');
?>

<!-- to include multipe select picker  
 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<!-- end -->


<!--header and top bar ends here-->

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9" id="content">

                <body id="content">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Company Register</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="container-fluid">
                                    <br>

                                    <div class="signin-form">
                                        <span><b style="color:red;">* Fields are Required</b></span>
                                        <br><br>
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label>
                                                    <b style="color:red;">*</b>Company Name
                                                </label>
                                                <form method="POST" action="">
                                                    <select name="Company_Id" id="dropdown" class="selectpicker" data-live-search="true" onchange="alpha(this.value)" required>
                                                        <option value=0 >Select a Company Name</option>
                                                        <?php

                                                        for ($i = 0; $i < $result['NO_OF_ITEMS']; $i++) {

                                                            echo "<option value=" . $result['oDATA'][$i]['company_id'] . "  > " . $result['oDATA'][$i]['company_name'] . " </option>";
                                                        } 
                                                        ?>
                                                    </select>

                                                <p><span id="total"></span></p>

                                                <script type="text/javascript">
                                                    function alpha(value) {
                                                        if (value == 0) { 
                                                            document.getElementById("total").innerHTML = "";
                                                            return;
                                                        } 
                                                        else {
                                                            var xmlhttp = new XMLHttpRequest();
                                                            xmlhttp.onreadystatechange = function() {
                                                                if (this.readyState == 4 && this.status == 200) {
                                                                    document.getElementById("total").innerHTML = this.responseText;
                                                                }
                                                            };
                                                            xmlhttp.open("GET", "temp.php?q=" + value, true);
                                                            xmlhttp.send();
                                                        }
                                                    }


                                                </script>

                                                

                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    <b style="color:red;">*</b>Job Title
                                                </label>
                                                <input type="text" class="form-control" placeholder="Enter Job Title" name="Job_Title" required />
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <b style="color:red;">*</b>Job Description
                                                </label>
                                                <input type="text" class="form-control" placeholder="Enter Job Description" name="Job_Description" required />
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    CGPA Requirement
                                                </label>
                                                <input type="number" min="0" step="any" class="form-control" placeholder="Enter CGPA Requirement" name="CGPA_Requirement" />
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <b style="color:red;">*</b>Program
                                                </label>
                                                <select name="Program" class="selectpicker" required>
                                                    <option>Select a Program</option>
                                                    <?php

                                                    for ($i = 0; $i < $result1['NO_OF_ITEMS']; $i++) {
                                                        echo "<option value=" . $result1['oDATA'][$i]['p_code'] . " > " . $result1['oDATA'][$i]['p_name'] . " </option>";
                                                    } ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <b style="color:red;">*</b>Branch
                                                </label>
                                                <select name="Branch[]" class="selectpicker" multiple data-live-search="true" required>

                                                    <?php

                                                    for ($i = 0; $i < $result2['NO_OF_ITEMS']; $i++) {
                                                        echo "<option value= " . $result2['oDATA'][$i]['b_code'] . " > " . $result2['oDATA'][$i]['b_name'] . " </option>";
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Application Period
                                                </label>
                                                <input type="date" name="Application_Period" id="interviewdate">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <b style="color:red;">*</b>Minimum Package Offered
                                                </label>
                                                <input type="text" class="form-control" placeholder="Enter Minimum Package Offered" name="Minimum_Package_Offered" required />
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    PPT Date
                                                </label>
                                                <input type="date" name="ppt_date" id="pptdate">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Shortlisting Date
                                                </label>
                                                <input type="date" name="shortlist_date" id="shortlistdate">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Test Date
                                                </label>
                                                <input type="date" name="test_date" id="testdate">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Interview Date
                                                    <input type="date" name="interview_date" id="interviewdate">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Academic-Year
                                                </label>
                                                <input type="number" min="0" step="any" class="form-control" placeholder="Enter Academic Year" name="academic_year" id="academic_year">
                                            </div>

                                            <hr />
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="submit">
                                                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Post
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>

                    </div>


                </body>
            </div>

        </div>
    </div>
</body> 