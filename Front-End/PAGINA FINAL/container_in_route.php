<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Container in Route</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="new.css" rel="stylesheet">

        <script language="javascript">

            function addRow(idContainer,routeName,route) {

                var table = document.getElementById("dataTable");

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = idContainer;

                var cell2 = row.insertCell(1);
                cell2.innerHTML = routeName;

                var cell3 = row.insertCell(2);
                cell3.innerHTML = route;

            }

        </script>



    </head>
    <body>


        <div class="container">
            <h3>Container in Route</h3>
            <br>
            <div class="row">
                <div class="col-lg-6">

                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Container ID</th>
                                    <th>Route Name</th>
                                    <th>Route ID</th>
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

        $json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDContainer/containersInRoute", false);
        $obj = json_decode($json,true);

        foreach($obj as $item){
        $idContainer = $item["idContainer"];
        $routeName = $item["routeName"];
        $route = $item["route"];
        
        echo "<script type='text/javascript'>addRow('$idContainer','$routeName','$route');</script>"; 
        }
        ?>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.dropdown.js"></script>
        <script type="text/javascript" src="searchFunction.js"></script>

    </body>
</html>