<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="login.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body class="text-center">

    <div class="container">
        <div class="row">
    <div class="col-6 col-md-6 col-col-lg-6">
        <div class="card card-container">
        <h1 style="margin-right:10px">Sign in</h1>
    
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="User" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" value="ajouter" name="action" type="submit">Sign in</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->

<?php
    require('formconnect.php');
?>
        

            <div class="col-6 col-md-6 col-col-lg-6">
<?php 
     include("index.php");
?>
    </div>
        </div>


</body>
</html>