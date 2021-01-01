<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="index.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body >

    <div class="container-fluid">
        <div class="row-fluid" >
           
              
             <div class="col-md-offset-4 col-md-4" id="box">
              <h2 style="margin-right:15px"class="title">Contact Us</h2>
               
                    <hr>
                   

                        <form class="form-horizontal"  method="post" id="contact_form">
                            <fieldset>
                                <!-- Form Name -->


                                <!-- Text input-->

                                <div class="form-group">

                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="name" placeholder="Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>


                          
                                <!-- Text input-->
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>


                                <!-- Text input-->

                                <div class="form-group">

                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input name="phone" placeholder="(005)501-120101" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <div class="form-group">

                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <input name="message" placeholder="message" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning pull-right">submit <span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>

                        <?php
if(isset($_POST['message'])){
$entete = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: ' . $_POST['email'] . "\r\n";

$message = '<h1>Message envoyé depuis la page Contact</h1>
<p><b>Nom : </b>' . $_POST['name'] . '<br>
<b>Email : </b>' . $_POST['email'] . '<br>
<b>Message : </b>' . $_POST['message'] . '</p>';

$retour = mail('diraneh1@gmail.com', 'Envoi depuis page Contact', $message, $entete);
if($retour) {
echo '<p>Votre message a bien été envoyé.</p>';
}
}
?>
            </div> 
</div>

</body>
</html>