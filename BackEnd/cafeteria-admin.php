<html lang="en">
<head>
  <title>Admin Panel- Cafeteria</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  
 
     <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.css" rel="stylesheet">
<script type="text/javascript">
</script>
  <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="js/datatable-plugins/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.js"></script>
 <!-- Custom Datatable JavaScript -->
    <script src="js/myapp.js"></script>
    
<style>
    
.switch {
	width: 50px;
	height: 30px;
	position: relative;
	display: inline-block;
}

.switch input {
	display: none;
}

.slider {
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	cursor: pointer;
	background-color: #ccc;
	border-radius: 30px;
	transition: .5s;
}

.slider:before {
	position: absolute;
	width: 20px;
	height: 20px;
	content: "";
	bottom: 5px;
	left: 5px;
	background-color: #fff;
	border-radius: 50%;
	transition: .5s;
}

input:checked+.slider {
	background-color: #1863E6;
}

input:checked+.slider:before {
	transform: translateX(20px);
}
.help-block {
	color: red;
}

.adminDataTableImg {
	width: 50px;
	height: 50px;
}

.switch {
	width: 50px;
	height: 30px;
	position: relative;
	display: inline-block;
}

.switch input {
	display: none;
}

.slider {
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	cursor: pointer;
	background-color: #ccc;
	border-radius: 30px;
	transition: .5s;
}

.slider:before {
	position: absolute;
	width: 20px;
	height: 20px;
	content: "";
	bottom: 5px;
	left: 5px;
	background-color: #fff;
	border-radius: 50%;
	transition: .5s;
}

input:checked+.slider {
	background-color: #1863E6;
}

input:checked+.slider:before {
	transform: translateX(20px);
}
</style>    
</head>
<body  onUnload="">
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            List Of Orders 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="orderTable">
                                <thead>
                                    <tr>
                                      
                                        <th>Order ID</th>
                                        <th>Transaction ID</th>
                                        <th>Payment Status</th>
                                        <th>Timeslot </th>
                                        <th>Grand Total </th>
                                        <th> </th>
                                        <th> </th>
                                        <th>Number of Items</th>
                                        <th>Order Time Stamp </th>
                                        <th>Name </th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        
                         
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
    
    
    
    
</body>
</html>