
<?php 

session_start();
ob_start(); 
$Nombre =  $_SESSION['Name'];
$LastName =  $_SESSION['LastName']; 
?> 


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Administrator Web</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="new.css" rel="stylesheet">

        <style type="text/css">
            .pane {
                display: block;
                overflow-y: scroll;
                min-height: 250px;
                max-height:250px;
            }
            .modal-header-success {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #5cb85c;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
            .modal-header-danger {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #d9534f;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
            .modal-header-warning {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #f0ad4e;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}

        </style>



        <script language="javascript">

            function addPackageStorage(packagesIdPackages, price, costumer, arrivalDate) {

                var table = document.getElementById("dataTableStorage");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);
                var cell1 = row.insertCell(0);
                cell1.innerHTML = costumer;
                var cell2 = row.insertCell(1);
                cell2.innerHTML = packagesIdPackages;
                var cell3 = row.insertCell(2);
                cell3.innerHTML = price;
                var cell4 = row.insertCell(3);
                cell4.innerHTML = arrivalDate;
            }
            function addBestCostumer(name, total) {

                var table = document.getElementById("dataTableBestCostumer");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = name;
                var cell2 = row.insertCell(1);
                cell2.innerHTML = total;
            }

            function addWorstCostumer(name, total) {

                var table = document.getElementById("dataTableWorstCostumer");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = name;
                var cell2 = row.insertCell(1);
                cell2.innerHTML = total;
            }
            function addRoute(name, idRoute, duration, arrivalPoint) {

                var table = document.getElementById("dataTableRoutes");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = name;
                var cell2 = row.insertCell(1);
                cell2.innerHTML = idRoute;
                var cell2 = row.insertCell(2);
                cell2.innerHTML = duration;
                var cell2 = row.insertCell(3);
                cell2.innerHTML = arrivalPoint;
            }
            function addBestRoute(name, use) {

                var table = document.getElementById("dataTableBestRoute");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = name;
                var cell2 = row.insertCell(1);
                cell2.innerHTML = use;

            }
            function addWorstRoute(name, use) {

                var table = document.getElementById("dataTableWorstRoute");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = name;
                var cell2 = row.insertCell(1);
                cell2.innerHTML = use;
            }
            function addUnpack(idContainer) {

                var table = document.getElementById("dataTableUnpack");
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = idContainer;

            }

        </script>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="well well-lg">
                    <h4>
                        <?php echo $Nombre; ?>  
                        <?php echo $LastName; ?>                
                    </h4>

                    <a  class="btn btn-default btn-md btn-primary" href="index.php">Home</a>
                    <a  class="btn btn-default pull-right btn-md btn-primary" href="index.php">Sign Up</a>

                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center text-muted">Administration</h2>
            <hr>
            <h3 class="text-center">Customer</h3>
        </div>


        <div class="container">

            <div class="row">


                <div class="col-lg-6">
                    <h4>Register Package</h4>
                    <img src="http://www.bwfparcels.com/wp-content/uploads/2014/03/PackageIcon.png" width="100">
                    <button type="button" class="btn btn-default btn-md btn-danger" data-toggle="modal" data-target="#modalRegister">Register</button>
                </div>


                <div class="col-lg-6">
                    <h4>Packages in Store</h4>
                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableStorage">
                            <thead>
                                <tr>
                                    <th>Costumer</th>
                                    <th>Package ID</th>
                                    <th>Price</th>
                                    <th>Arrival Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="http://www.telephonedoctor.com/wp-content/uploads/2012/11/iStock_000018421526Small.jpg" width="75%">
                </div>

                <div class="col-lg-6">

                    <h4>Best Costumers </h4>
                    <div class="pane">

                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableBestCostumer">
                            <thead>
                                <tr>
                                    <th>Costumer</th>
                                    <th>Total Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="http://static-assets.komando.com/wp-content/uploads/2014/07/phone-call.jpg" width="65%">
                </div>

                <div class="col-lg-6">

                    <h4>Worst Costumers </h4>

                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableWorstCostumer">
                            <thead>
                                <tr>
                                    <th>Costumer</th>
                                    <th>Total Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div >
        </div >


        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Route</h3>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-6">
                    <h4>Register Package</h4>
                    <img width="100" src="https://cdn4.iconfinder.com/data/icons/ios7-active-strategy/512/route_sign_road_direction-512.png">
                    <button type="button" class="btn btn-default btn-success btn-md" data-toggle="modal" data-target="#modalCreateRoute">Create New Route</button>
                </div>

                <div class="col-lg-6">

                    <h4>All Routes</h4>
                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableRoutes">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>ID Route</th>
                                    <th>Duration</th>
                                    <th>Arrival Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <img src="http://www.sportiva.com/resources/images/live/CLIMBING_Article/Mark_Smiley_Wishbone_Arete/IMG_2650.jpg" width="70%">
                </div>

                <div class="col-md-6">

                    <h4>Worst Route </h4>

                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableWorstRoute">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Number of Uses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="http://www.abc.es/Media/201407/22/ana-perez-herrera-autopista--644x362.jpg" width="70%">
                </div>
                <br>
                <br>
                <div class="col-md-6">

                    <h4>Best Route </h4>

                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableBestRoute">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Number of Uses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <hr>
            <h3 class="text-center">Employee</h3>
            <img width="100" src="http://fleet.affablesolution.com/assets/img/photos/img16.jpg">
            <button type="button" class="btn btn-default btn-info btn-md" data-toggle="modal" data-target="#unpacking-modal">Create New Employee</button>
        </div>

        <div class="container">
            <hr>
            <h3 class="text-center">Container</h3>


            <div class="row">
                <div class="col-md-4">
                    <img width="100" src="http://icons.iconarchive.com/icons/antrepo/container/256/yellow-icon.png">
                    <button type="button" class="btn btn-default btn-warning btn-md" data-toggle="modal" data-target="#modalCreateContainer">Create New Container</button>
                </div>
                <br>
                <br>
                <div class="col-md-4">
                    <form Name ="form3" Method ="POST" ACTION = "container_in_route.php">
                        <input id="idAccount" name="idAccount" type="hidden">  
                        <input class="btn btn-default btn-warning btn-md" type = "Submit" value = "Containers In Route">
                    </form>
                </div>
                <div class="col-md-4">

                    <form Name ="form4" Method ="POST" ACTION = "least_use_container.php">
                        <input id="idAccount" name="idAccount" type="hidden">  
                        <input class="btn btn-default btn-warning btn-md" type = "Submit" value = "Least Used Containers">
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <img src="http://www.lifemaideasy.us/wp-content/uploads/2012/08/unpacking-service.png" width="95%">
                        <br>
                        <br>
                        <form action="unpacking.php" method="POST">
                            <div class="input-group">
                                <button type="submit" class="btn btn-info btn-lg">Unpacking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Registro Paquete-->
        <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Register Package</h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" action="register_package.php" method="POST">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idAccount">Costumer Account</label>  
                                    <div class="col-md-6">
                                        <input id="idAccount" name="idAccount" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idType">Type</label>
                                    <div class="col-md-6">
                                        <select id="idType" name="idType" class="form-control">
                                            <option value="1">Regular</option>
                                            <option value="2">Special</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idSize">Size</label>  
                                    <div class="col-md-6">
                                        <input id="idSize" name="idSize" type="text" placeholder="" class="form-control input-md" required="">  
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idWeight">Weight</label>  
                                    <div class="col-md-6">
                                        <input id="idWeight" name="idWeight" type="text" placeholder="" class="form-control input-md" required="">  
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idValue">Value</label>  
                                    <div class="col-md-6">
                                        <input id="idValue" name="idValue" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idDescription">Description</label>
                                    <div class="col-md-4">                     
                                        <textarea class="form-control" id="idDescription" name="idDescription" >Write a little description of the package</textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="modal-footer form-group">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ingreso Empleado-->
        <div class="modal fade" id="modalCreateEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Create New Employee</h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" action="create_employee.php" method="POST">
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idName">Name</label>  
                                    <div class="col-md-6">
                                        <input id="idName" name="idName" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idLastName">LastName</label>  
                                    <div class="col-md-6">
                                        <input id="idLastName" name="idLastName" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idPhone">Telephone</label>  
                                    <div class="col-md-6">
                                        <input id="idPhone" name="idPhone" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idPassword">Password</label>
                                    <div class="col-md-6">
                                        <input id="idPassword" name="idPassword" type="password" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="modal-footer form-group">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>


                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ingreso Ruta-->
        <div class="modal fade" id="modalCreateRoute" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Create New Route</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="create_route.php" method="POST">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idName">Name</label>  
                                    <div class="col-md-6">
                                        <input id="idName" name="idName" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idExit">Exit Point</label>  
                                    <div class="col-md-6">
                                        <input id="idExit" name="idExit" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idArrival">Arrival Point</label>  
                                    <div class="col-md-6">
                                        <input id="idArrival" name="idArrival" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idPrice">Price</label>  
                                    <div class="col-md-6">
                                        <input id="idPrice" name="idPrice" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idDuration">Duration</label>  
                                    <div class="col-md-6">
                                        <input id="idDuration" name="idDuration" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idAmount">Max Amount</label>  
                                    <div class="col-md-6">
                                        <input id="idAmount" name="idAmount" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="modal-footer form-group">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </fieldset>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ingreso Container-->
        <div class="modal fade" id="modalCreateContainer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Create New Container</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="create_container.php" method="POST">
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="idMaxSize">Max Size</label>  
                                    <div class="col-md-6">
                                        <input id="idMaxSize" name="idMaxSize" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="modal-footer form-group">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>

         <!-- Modal -->
        <div class="modal fade" id="noUnpack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header modal-header-warning">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-thumbs-up"></i>There are no packages to unpack !</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Modal -->
        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-thumbs-up"></i>Successfully !!</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Modal -->
        <div class="modal fade" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-thumbs-down"></i>Error in Recording Data</h4>
                    </div>      
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Modal -->
        <div class="modal fade" id="successCreateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">

                    <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-thumbs-up"></i>Successfully !!</h4>
                    </div>
                    <div class="modal-body">
                        <h3>Your Account Number: </h3>
                        <h4 id="h3account">xxx</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Modal -->
        <div class="modal fade" id="unpacking-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">

                    <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-thumbs-up"></i>Arrived the following containers:</h4>
                    </div>
                    <div class="modal-body">
                        
                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTableUnpack">
                            <thead>
                                <tr>
                                    <th>Container ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Modal -->
        <div class="modal fade" id="successCreatePackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">

                    <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-thumbs-up"></i>Successfully !!</h4>
                    </div>
                    <div class="modal-body">
                        <h3>The Tracking Package ID is: </h3>
                        <h4 id="h4account">xxx</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <br>


        <?php 
        include 'call_api.php';


        $json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDStorage/showPackageInStorage", false);
        $obj = json_decode($json,true);

        foreach($obj as $item){

        $packagesIdPackages = $item["packagesIdPackages"];
        $price = $item["price"];
        $costumer = $item["costumer"];        
        $arrivalDate = $item["arrivalDate"];
        echo "<script type='text/javascript'>addPackageStorage('$packagesIdPackages','$price','$costumer','$arrivalDate');</script>"; 
        }

        $jsonBestCostumer = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDCustomerHasPackages/bestCustomers?ammount=10", false);
        $objBestCostumer = json_decode($jsonBestCostumer,true);

        foreach($objBestCostumer as $item){

        $name = $item["name"];
        $total = $item["total"];
        echo "<script type='text/javascript'>addBestCostumer('$name','$total');</script>"; 
        }


        $jsonWorstCostumer = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDCustomerHasPackages/worstCustomers?ammount=10", false);
        $objWorstCostumer = json_decode($jsonWorstCostumer,true);

        foreach($objWorstCostumer as $item){

        $name = $item["name"];
        $total = $item["total"];
        echo "<script type='text/javascript'>addWorstCostumer('$name','$total');</script>"; 
        }

        $jsonRoutes = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDRoute/showRoutes", false);
        $objRoutes = json_decode($jsonRoutes,true);

        foreach($objRoutes as $item){

        $name = $item["name"];
        $idRoute = $item["idRoute"];
        $duration = $item["duration"];
        $arrivalPoint = $item["arrivalPoint"];


        echo "<script type='text/javascript'>addRoute('$name','$idRoute','$duration','$arrivalPoint');</script>"; 
        }

        $jsonBestRoutes = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDRoute/bestRoutes?ammount=10", false);
        $objBestRoutes = json_decode($jsonBestRoutes,true);

        foreach($objBestRoutes as $item){

        $name = $item["name"];
        $use = $item["uses"];

        echo "<script type='text/javascript'>addBestRoute('$name','$use');</script>"; 
        }

        $jsonWorstRoutes = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDRoute/worstRoutes?ammount=10", false);
        $objWorstRoutes = json_decode($jsonWorstRoutes,true);

        foreach($objWorstRoutes as $item){

        $name = $item["name"];
        $use = $item["uses"];


        echo "<script type='text/javascript'>addWorstRoute('$name','$use');</script>"; 
        }


        ?>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.dropdown.js"></script>
        <script type="text/javascript" src="searchFunction.js"></script>

    </body>
</html>