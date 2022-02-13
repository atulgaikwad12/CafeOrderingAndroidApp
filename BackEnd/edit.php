<?php 

$orderid= "'".$_GET['order_id']."'";
?>

<html lang="en">
<head>
  <title>Admin Panel- Cafeteria</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.css" rel="stylesheet">
    
       <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.js"></script>
 <!-- Custom Datatable JavaScript -->
    <script src="js/myapp.js"></script>
    
</head>
<body>
    <input type="hidden" id="myPhpValue" value="<?php echo $orderid ?>" />
    
    <br>
    <center>
        <a href="cafeteria-admin.php" class="btn btn-lg btn-primary">Return Back</a>
    </center>
    <br>
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            List Of Cart Products 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="cartTable">
                                <thead>
                                    <tr>
                                      
                                        <th>Product Name </th>
                                        <th>Price </th>
                                        <th>Sub total</th>
                                        <th>Quantity </th>
                                        <th>Image</th>
                                        <th>Cart ID </th>
                         
                         
                                    </tr>
                                </thead>
                              
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
 </div>   
 <center>
     <!--<a href="delete.php?order_id='<?php echo $orderid;?>'" class="btn btn-lg btn-warning">Complete Order</a> -->
 </center>
 
    
    
    
    
</body>
</html>