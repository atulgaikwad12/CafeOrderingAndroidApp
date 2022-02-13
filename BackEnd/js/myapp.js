$(function(){
	
//code for jquery datable
//create data table

var $table = $('#orderTable');





if($table.length){
	//console.log('Inside the table');
	var jsonUrl = '';

	
		jsonUrl = 'http://quintecksolutions.com/BE_project/fetchtablejson.php';
	
	
	$table.DataTable({
		lengthMenu : [[3,5,10,-1],['3 ','5 ','10 ','ALL']],
		pageLength: 5,
		responsive: true,
		"order": [], //Initial no order.
         "aaSorting": [],
	ajax: {
		url: jsonUrl,
		dataSrc: 'orders'
	},
	columns:[
	          
	          {
	        	  data: 'order_id',
	        	  mRender: function(data,type,row){
	        		 return '<font color="#fd6239"><b>' + data +'</b></font>';
	        	  }
	          },
	          {
	        	  data: 'transaction_id',
	        	  mRender: function(data,type,row){
	        		 return '<font color="#fd6239"><b>' + data +'</b></font>';
	        	  }
	          },
	          {
	        	  data: 'mark',
	        		 bSortable: false,
	        	     mRender: function(data,type,row){
	        		 var str = '';
	        		 str += '<label class="switch">';
	        		 if(data=='paid'){
	        			 str += '<input type="checkbox" checked="checked" value="'+row.order_id+'"/>'; 
	        		 }
	        		 else{
	        		 str += '<input type="checkbox"  value="'+row.order_id+'"/>';	
	        		 }
	        		 str += '	<div class="slider"></div></label>';
	        					
	        		
	        		 return str; 
	        	  }
	          },
	          {
	        	  data: 'timeslot',
	        	  mRender: function(data,type,row){
	        		  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        	  }
	          },
	          {
	        	  data: 'grand_total',
	        	  mRender: function(data,type,row){
	        		  
        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
        		  }
	          },
	           {
	        	  data: 'order_id',
	        	  mRender: function(data,type,row){
	        		 return '<a href="edit.php?order_id=' + data + '"><button class="btn btn-lg btn-primary">View More</button></a>';
	        	  }
	          },
	          {
	        	  data: 'order_id',
	        	  mRender: function(data,type,row){
	        		 return '<a href="delete.php?order_id=' + data + '"><button class="btn btn-lg btn-danger">Complete</button></a>';
	        	  }
	          },
	          
	          {
	        	  data: 'number_of_items',
	        	  mRender: function(data,type,row){
	        	   return '<font color="#fd6239"><b>' + data +'</b></font>';
	        	  }
	          },
	          {
	        	  data: 'order_time_stamp',
	        	  mRender: function(data,type,row){
        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
        		  }
	          },
	          {
	        	  data: 'name',  
	        		  mRender: function(data,type,row){
	        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        		  }
	          },
	          {
	        	  data: 'mobile',
	        		  mRender: function(data,type,row){
	        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        		  }
	          },
	           {
	        	  data: 'email',
	        		  mRender: function(data,type,row){
	        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        		  }
	          }
	          ],
	            initComplete: function(){
	        	  var api = this.api();
	        	  api.$('.switch input[type="checkbox"]').on('change',function(){
	        			var checkbox = $(this);
	        			var checked = checkbox.prop('checked');
	        			var dMsg = (checked)? 'Mark Order As Paid ?' : 'Mark Order As Unpaid ?';
	        			var value= checkbox.prop('value');
	        			
	        			bootbox.confirm({
	        				size : "medium",
	        				title : "Order Payment Status ",
	        				message : dMsg,
	        				callback: function(confirmed){
	        					if(confirmed){
	        						
	        						var activationUrl= 'mark.php?order_id='+  value;
	        						
	        						$.post(activationUrl, function(data){
	        							bootbox.alert({
		        							size : 'medium',
		        							title : 'Information',
		        							message : data
		        						});	
	        						});
	        						
	        					}
	        					else{
	        						checkbox.prop('checked',!checked);
	        					}
	        				}
	        			});
	        			
	        		});
	          }
		
	});
}



//--------------------------------------------------------------

var $table = $('#cartTable');





if($table.length){
	//console.log('Inside the table');
	var jsonUrl = '';
var $orderid= $("#myPhpValue").val();
	
		jsonUrl = 'http://quintecksolutions.com/BE_project/fetchcart.php?order_id='+$orderid;
	
	
	$table.DataTable({
		lengthMenu : [[3,5,10,-1],['3 ','5 ','10 ','ALL']],
		pageLength: 5,
		responsive: true,
		"order": [], //Initial no order.
         "aaSorting": [],
	ajax: {
		url: jsonUrl,
		dataSrc: 'cart'
	},
	columns:[
	          
	          {
	        	  data: 'product_name',
	        	  mRender: function(data,type,row){
	        		 return '<font color="#fd6239"><b>' + data +'</b></font>';
	        	  }
	          },
	          {
	        	  data: 'price',  
	        		  mRender: function(data,type,row){
	        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        		  }
	          },
	          {
	        	  data: 'subtotal',
	        		  mRender: function(data,type,row){
	        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        		  }
	          },
	           {
	        	  data: 'quantity',
	        		  mRender: function(data,type,row){
	        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
	        		  }
	          },
	          {
	        	  data: 'image_url',
	        	  mRender: function(data,type,row){
	        		  return '<img height="100px" width="100px" src="' + data +'">';
	        	  }
	          },
	          {
	        	  data: 'cart_id',
	        	  mRender: function(data,type,row){
	        		  
        			  return '<font color="#fd6239"><b>' + data +'</b></font>';
        		  }
	          }
	          ]
		
	});
}



//--------------------------------------------------------------
});
		