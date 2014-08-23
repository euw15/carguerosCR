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

            function addRow(idBilling,freight,discount,costStorage,tax) {

                var table = document.getElementById("dataTable");

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = idBilling;

                var cell2 = row.insertCell(1);
                cell2.innerHTML = tax;

                var cell3 = row.insertCell(2);
                cell3.innerHTML = costStorage;

                var cell4 = row.insertCell(3);
                cell4.innerHTML = discount;

                var cell5 = row.insertCell(4);
                cell5.innerHTML = freight;

            }

        </script>



    </head>
    <body>


        <div class="container">
            <h3>User Billings</h3>
            <br>
             <div class="row">
            <div class="col-lg-6">
                    <div class="pane">
                        <table class="table table-list-search table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Billing ID</th>
                                    <th>Tax</th>
                                    <th>Cost Storage</th>
                                    <th>Discount</th>
                                    <th>Freight</th>
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
            $json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/CDBilling/showcostumerBilling?account=$idAccount", false);
            $obj = json_decode($json,true);
            foreach($obj as $item){

                    $idBilling = $item["idBilling"];
                    $freight = $item["freight"];
                    $discount = $item["discount"];
                    $costStorage = $item["costStorage"];
                    $tax = $item["tax"];

                    echo "<script type='text/javascript'>addRow('$idBilling','$freight','$discount','$costStorage','$tax');</script>"; 
            }
        ?>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.dropdown.js"></script>
        <script type="text/javascript" src="searchFunction.js"></script>

    </body>
</html>