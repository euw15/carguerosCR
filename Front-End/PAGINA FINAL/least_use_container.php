<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Least use Container</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="new.css" rel="stylesheet">

        <script language="javascript">

            function addRow(idContainer,uses) {

                var table = document.getElementById("dataTable");

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = idContainer;

                var cell2 = row.insertCell(1);
                cell2.innerHTML = uses;

            }

        </script>



    </head>
    <body>


        <div class="container">
            <h3>Least use Container</h3>
            <br>
            <div class="row">
                <div class="col-lg-6">

                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Container ID</th>
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


        <?php 

        include 'call_api.php';

        $json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDContainer/leastUsedContainers?ammount=10", false);
        $obj = json_decode($json,true);

        foreach($obj as $item){
        $idContainer = $item["idContainer"];
        $uses = $item["uses"];
        
        echo "<script type='text/javascript'>addRow('$idContainer','$uses');</script>"; 
        }
        ?>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.dropdown.js"></script>
        <script type="text/javascript" src="searchFunction.js"></script>

    </body>
</html>