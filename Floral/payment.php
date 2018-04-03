
<html>
<head>
<style>
#a{
width:500px;
height:200px;
border:15px solid black;
margin:100px;
padding:50px;
//padding-left:200px;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
	$("#s").click(function() {
	
    var leg=0;
var base_url="http://121.244.184.114:8081/eda-web-service/";

	var threadid=$("#tid").val();
	
  			var content={
  			"thread_ref_id":threadid,
			"status":" made"
  			};
              jQuery.support.cors = true;
  					$
  							.ajax({
  								type : "POST",
  								contentType : 'application/json',
  								dataType : 'json',
  								url :base_url+"message/payment/",
  								data :JSON.stringify(content) ,
  								crossDomain : true,
                 
                  success : function(data) {
						alert("success");
						console.log(data.length);
										
						
						
                  }
              }); 
              }); 
            	    
                  
				  
		$("#c").click(function() {
	
    var leg=0;
var base_url="http://121.244.184.114:8081/eda-web-service/";

	var threadid=$("#tid").val();
	
  			var content={
  			"thread_ref_id":threadid,
			"status":" failure"
  			};
              jQuery.support.cors = true;
  					$.ajax({
  								type : "POST",
  								contentType : 'application/json',
  								dataType : 'json',
  								url :base_url+"message/payment/",
  								data :JSON.stringify(content) ,
  								crossDomain : true,
                 
                  success : function() {
						
                  }
              }); 
              }); 
            	    		 
  		
  	});
 
    
   

  </script>

</head>
<body>
<div class="container">
  <center><h2>Payment Page</h2></center>
  <form class="form-horizontal" action="" method="post">
  <div class="row">
  <div class="col-sm-12">
<form method="post">
<input type="text" id="tid" value="<?php echo $_GET['tid']; ?>" hidden>

	  <div class="form-group">
	  <div class="col-sm-6"> 
		<label>Account Number</label>	  
	  <input type="text" placeholder="Account No" class="form-control" required> 
	  </div>
	  </div>
	<div class="form-group">
	  <div class="col-sm-4">  
	  <label>Expiration Date</label>
	  <input type="date" placeholder="Expiration Date" class="form-control" required>
	  </div>
	  </div>
	 <div class="form-group">
	  <div class="col-sm-2">  
	  <label>CVV</label>	  
	  <input type="text" placeholder="CVV" class="form-control" required>
	  </div>
	  </div>
	  </div>
 <div class="form-group">
 <div class="col-sm-offset-2 col-sm-10">
<button id="s" class="btn btn-primary">Make Payment</button>
<a id="c" class="btn btn-primary"> Cancel</a>
</div>
</div>
</div>
</div>
</form>
</body>
</html>