<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print "Home | ";include ("title.php");?></title>
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="#">Page 2</a></li>
            </ul>
        </div>
    </nav>
    <p> This page should display a map that  shows the distribution of projects worldwide</p>
</body>
</html>