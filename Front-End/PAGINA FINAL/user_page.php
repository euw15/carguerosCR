<?php 
session_start();
ob_start(); 

$Nombre =  $_SESSION['Name'];
$LastName =  $_SESSION['LastName']; 

$Account =  $_SESSION['Account']; 
$Type =  $_SESSION['Type'];  
$Score =  $_SESSION['Score']; 

?> 

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="editor" content="brix.io">

        <title>User Start Page</title>

        <!-- Bootstrap -->
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


        <!-- User -->
        <link href="css/style.css" rel="stylesheet">

        <style type="text/css">


            .lib-panel {
                margin-bottom: 20Px;
            }
            .lib-panel img {
                width: 100%;
                background-color: transparent;
            }

            .lib-panel .row,
            .lib-panel .col-md-6 {
                padding: 0;
                background-color: #FFFFFF;
            }


            .lib-panel .lib-row {
                padding: 0 20px 0 20px;
            }

            .lib-panel .lib-row.lib-header {
                background-color: #FFFFFF;
                font-size: 20px;
                padding: 10px 20px 0 20px;
            }

            .lib-panel .lib-row.lib-header .lib-header-seperator {
                height: 2px;
                width: 26px;
                background-color: #d9d9d9;
                margin: 7px 0 7px 0;
            }

            .lib-panel .lib-row.lib-desc {
                position: relative;
                height: 100%;
                display: block;
                font-size: 13px;
            }
            .lib-panel .lib-row.lib-desc a{
                position: absolute;
                width: 100%;
                bottom: 10px;
                left: 20px;
            }

            .row-margin-bottom {
                margin-bottom: 20px;
            }

            .box-shadow {
                -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
                box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
            }

            .no-padding {
                padding: 0;
            }
            section {
                padding: 100px 0;
                text-align: center;
            }
            select.frecuency {
                border: none;
                font-style: italic;
                background-color: transparent;
                cursor: pointer;
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-transition: -webkit-transform .35s ease-in;
                transition: -webkit-transform .35s ease-in;
                border-bottom: none;
            }
            select.frecuency:focus {
                outline: none;
                border-bottom: 5px solid #39b3d7;
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px);
                -webkit-transition: -webkit-transform .35s ease-in;
                transition: -webkit-transform .35s ease-in;
            }
            .free {
                text-transform: uppercase;
            }
            .input-group {
                margin: 20px auto;
                width: 100%;
            }
            input.btn.btn-lg {
                width: 60%;
                height: 60px;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            button.btn {
                width: 40%;
                height: 60px;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .promise {
                color: #999;
            }


        </style>


    </head>
    <body class="text-left">
        <div class="container">


            <nav class="navbar navbar-default" role="navigation">
                <ul class="nav navbar-nav bg-success">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="active "><a href="index.php">Sign Up</a></li>
                </ul>
            </nav><h2 class="text-warning">Your Account</h2>


            <div class="row">
                <div class="col-md-12">

                    <div class="container-fluid well span6">
                        <div class="row-fluid">
                            <div class="span2" >
                                <img src="http://wcdn3.dataknet.com/static/resources/icons/set3/c9f1cdf48670.png" class="img-circle" width="12%">
                            </div>

                            <div class="span8">
                                <h3><?php echo $Nombre; ?> <?php echo $LastName; ?></h3>
                                <h5>Account Number: <?php echo $Account; ?></h5>
                                <h5>Account Type: <?php echo $Type; ?></h5>
                                <h5>Puntuation: <?php echo $Score; ?></h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container-fluid span12">
                <div class="col-md-5 no-padding lib-item" data-category="view">
                    <div class="lib-panel">
                        <div class="row box-shadow">
                            <div class="col-md-6">
                                <img class="lib-img-show" src="http://lorempixel.com/850/850/?random=123">
                            </div>
                            <div class="col-md-6">
                                <div class="lib-row lib-header">
                                    Packages
                                    <div class="lib-header-seperator"></div>
                                </div>
                                <div class="lib-row lib-desc">
                                    Look at all your packages and their status.                         
                                </div>
                                <div class="lib-row">
                                    <br>       
                                    <br>
                                    <form Name ="form1" Method ="POST" ACTION = "huge.php">
                                        <input id="idAccount" name="idAccount" type="hidden" value=<?php echo $Account; ?>>  
                                        <input class="btn btn-fresh text-uppercase" type = "Submit" value = "View Package">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 no-padding lib-item" data-category="ui">
                    <div class="lib-panel">
                        <div class="row box-shadow">
                            <div class="col-md-6">
                                <img class="lib-img" src="http://lorempixel.com/850/850/?random=456">
                            </div>
                            <div class="col-md-6">
                                <div class="lib-row lib-header">
                                    Billing
                                    <div class="lib-header-seperator"></div>
                                </div>
                                <div class="lib-row lib-desc">
                                    View all your bills and make payments when your packages are delivered.
                                </div>
                                <div class="lib-row">
                                    <form Name ="form2" Method ="POST" ACTION = "user_billing.php">
                                        <input id="idAccount" name="idAccount" type="hidden" value=<?php echo $Account; ?>>  
                                        <input class="btn btn-fresh text-uppercase" type = "Submit" value = "View Bills">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>Tracking Package</h3>
                    <div class="well">
                        <form action="package_tracking.php" method="POST">
                            <div class="input-group">
                                <input class="btn btn-lg" name="idPackage" id="idPackage" type="text" placeholder="Your Package ID" required>
                                <button type="submit" class="btn btn-info btn-lg">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Create Account</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>

