<?php
require ('config.php');
//Code for displaying all projects
//Updating projects code
//Delete project code

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php include ("title.php");?></title>
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

    </style>
</head>
<body>

<div class="header">
    <p><span class="glyphicon glyphicon-home"></span>&nbsp;Welcome to UN Projects Page</p>
</div>
<div class="container">
    <div class="navbrand">
        <div class="row">
            <div class="col-md-2">
                <a href="index.php"><img src="image_files/logo.png" alt="brandLogo"></a>
            </div>

        </div>

    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">United Nations</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="viewProject.php">Projects</a></li>
                <li><a href="#">Page 2</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
    <?php
    global $link;
        $sql = "SELECT * FROM projects";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
        echo "<table class='table table-borderless table-striped'>
                    <tr class='text-center'>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Objectives</th>
                    <th>Party To</th>
                    <th>Special Trust Fund(USD)</th>
                    <th>Co-Financing(USD)</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Story</th>
                    <th>SDGs</th>
                    <th>Country</th>
                    <th>Action</th>
                    
                    </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["project_id"]."</td>
            <td>".$row["title"]."</td>
            <td>".$row["objectives"]."</td>
            <td>".$row["party_to"]."</td>
            <td>".$row["special_trust_fund"]."</td>
            <td>".$row["co_financing"]."</td>
            <td>".$row["duration"]."</td>
            <td>".$row["status"]."</td>
            <td>".$row["story"]."</td>
            <td>".$row["s_id"]."</td>
            <td>".$row["country_id"]."</td>
            <td><a href='update.php?id=<?php echo 'id';>Update</a></button></td>
            </tr>";
            }
            echo "</table>";
        } else {
        echo "0 results";
        }
        ?>
    </div>
</body>
</html>
