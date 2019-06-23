<?php
require ('config.php');
session_start();
$errMsg = "";
if (isset($_POST['submit'])){
    $title = mysqli_real_escape_string($link,$_POST['pTitle']);
    $objective = mysqli_real_escape_string($link,$_POST['objectives']);
    $partyTo = mysqli_real_escape_string($link,$_POST['pty']);
    $sptf = mysqli_real_escape_string($link,$_POST['sptf']);
    $coFinanceAmount = $_POST['cFinance'];
    $duration = $_POST['projectDuration'];
    $status = $_POST['status'];
    $projectStory = mysqli_real_escape_string($link,$_POST['pStory']);
    $sdgs = mysqli_real_escape_string($link,$_POST['sdgs']);
    $country = array($_POST['country'],$_POST['country'],$_POST['country'],$_POST['country']);
    //Form validation
    if (empty($title) || empty($objective) || empty($partyTo) || empty($sptf) || empty($coFinanceAmount) || empty($duration) || empty($status) || empty($sdgs) || empty($country)){
        $errMsg = "All fields are required";
    }else{
        $sql = "INSERT INTO projects(title,objectives,party_to,special_trust_fund,co_financing,duration,status,story,s_id,country_id)
                VALUES ('$title','$objective','$partyTo','$sptf','$coFinanceAmount','$duration','$status','$projectStory','$sdgs','$country')";
        if ($link->query($sql) == true){
            header("location : projects.php");
        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print "Register | ";include ('title.php');?></title>
    <link rel="icon" href="image_files/logo.png">
    <!-- Import Bootstrap from CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Extra Theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--Import jQuery from CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .header{
            background-color: #DEDDD8;
            height: 40px;
            color: black;
            padding-left: 100px;
            padding-top: 10px;

        }
        .navbrand{
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .text-right {
            float: right;
        }
        body {
            background-image: url("");
            background-repeat: no-repeat;
        }
        .panel-body{
            font-size: smaller;
            background-image: url("");
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-center"><h4>Add New Project</h4></div>
                <div class="panel-body">
                    <?php echo"<p style='color: red'>{$errMsg}</p>";?>
                    <form action="addProject.php" method="post">
                        <div class="form-group">
                            <label for="projectTitle">Project Title:</label>
                            <input type="text" name="pTitle" placeholder="Project Title" class="form-control" id="projectTitle">
                        </div>
                        <div class="form-group">
                            <label for="objectives">Objectives:</label>
                            <textarea name="objectives" id="obj" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pty">Party To:</label>
                            <input type="text" name="pty" placeholder="Party to" class="form-control" id="pty">
                        </div>
                        <div class="form-group">
                            <label for="sptf">SPTF:</label>
                            <input type="number" name="sptf" placeholder="Special Programme Trust Fund Amount" class="form-control" id="sptf">
                        </div>
                        <div class="form-group">
                            <label for="cFinancing">Co-Financing:</label>
                            <input type="number" name="cFinance" placeholder="Co-financing Amount" class="form-control" id="cFinancing">
                        </div>
                        <div class="form-group">
                            <label for="duration">Project Duration:</label>
                            <input type="number" name="projectDuration" placeholder="Project Duration In months" class="form-control" id="duration">
                        </div>
                        <div class="form-group">
                            <label for="status">Project Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">----Select Project Status----</option>
                                <option value="Completed">Completed</option>
                                <option value="Under Implementation">Under Implementation</option>
                                <option value="Completion Report Submitted">Completion Report Submitted</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pStory">Project Story:</label>
                            <input type="url" name="pStory" placeholder="Project Story" class="form-control" id="pStory">
                        </div>
                        <div class="form-group">
                            <label for="sdgs">SDGs:</label>
                                <?php
                                $sql = "SELECT s_id FROM sdgs";
                                $result = mysqli_query($link,$sql);
                                echo '<select name="sdgs" class="form-control">';
                                echo '<option value="">----Select SDG----</option>';
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo '<option value="'.$row['s_id'].'">'.$row['s_id'].'</option>';
                                }
                                echo '</select>'
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sdgs">Country:</label>
                            <?php
                            $sql = "SELECT country_id FROM countries";
                            $result = mysqli_query($link,$sql);
                            echo '<select name="country" class="form-control">';
                            echo '<option value="">----Select Country----</option>';
                            while ($row = mysqli_fetch_assoc($result)){
                                echo '<option value="'.$row['country_id'].'">'.$row['country_id'].'</option>';
                            }
                            echo '</select>'
                            ?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    </form>

                </div>
<!--                <div class="panel-footer" style="font-size: smaller">Copyright &copy; <a href="#">Keja Manager</a> 2019, All Rights Reserved.</br>Powered by:<a href="">Dan Dev</a>.</div>-->
            </div>
        </div>
    </div>
</div>

</body>
</html>