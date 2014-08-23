<html>
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Package Details for User</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="new.css" rel="stylesheet">

        <script language="javascript">

            function addRow(Package,price,packageState,arrivalDate,description,state) {

                var table = document.getElementById("dataTable");

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = Package;

                var cell2 = row.insertCell(1);
                cell2.innerHTML = price;

                var cell3 = row.insertCell(2);
                cell3.innerHTML = packageState;


                var cell4 = row.insertCell(3);
                cell4.innerHTML = state;

                var cell5 = row.insertCell(4);
                cell5.innerHTML = arrivalDate;

                 var cell6 = row.insertCell(5);
                cell6.innerHTML = description;

            }

        </script>



    </head>
    <body>


        <div class="container">
            <h3>User Packages</h3>
            <br>
             <div class="row">
            <div class="col-lg-6">



                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Identificator</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                     <th>State</th>
                                    <th>Arrival Date</th>
                                    <th>Description</th>
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

        <?php 
            include 'call_api.php';
            $idAccount = $_POST['idAccount'];
            $json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/cdpackages/UserPackages?account=$idAccount", false);
            $obj = json_decode($json,true);
            foreach($obj as $item){
                    $idPackages = $item["idPackages"];
                    $price = $item["price"];
                    $packageState = $item["size"];
                    $arrivalDate = $item["arrivalDate"];
                    $description = $item["description"];
                    $state = $item["packageState"];
                    echo "<script type='text/javascript'>addRow('$idPackages','$price','$packageState','$arrivalDate','$description','$state');</script>"; 
            }
        ?>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.dropdown.js"></script>
        <script type="text/javascript" src="searchFunction.js"></script>

    </body>
</html>