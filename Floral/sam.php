<?php
$tid = "";
if(isset($_POST['submit']) && empty($_GET)) {
$name = $_POST['uname'];
$phn = $_POST['phn'];
$delto = $_POST['delto'];
$recno = $_POST['recno'];
$deladd = $_POST['deladd'];
$deladd1 = $_POST['deladd1'];
$deldate = $_POST['deldate'];
$occ = $_POST['occ'];
$fcol = $_POST['fcol'];
$msg = $_POST['msg'];
$tid = $_POST['tid'];

header('location:sam.php?tid='.$tid.'&name='.$name.'&phn='.$phn.'&delto='.$delto.'&recno='.$recno.'&deladd='.$deladd.'&deladd1='.$deladd1.'&deldate='.$deldate.'&occ='.$occ.'&fcol='.$fcol.'&msg='.$msg);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KGiSL Floral Delivery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="clipboard.min.js"></script>
 <script>
 $(function(){
	$("#fcol").change(function(){
		var fcol = $("#fcol").val();
		if(fcol == "red") {
			$("#im").attr("src","images/Flower3.png");
		}
		else if(fcol == "bc") {
			$("#im").attr("src","images/Flower1.png");
		}
		else if(fcol == "sc"){
			$("#im").attr("src","images/Flower2.png");
		}
		else
		{
			$("#im").attr("src","");
		}
	})
 });
 </script>
</head>
<body>

<div class="container">
  <center><h2>KGiSL Floral Delivery</h2></center>
  <form class="form-horizontal" action="" method="post">
  <div class="row">
  <div class="col-sm-6">
  <?php if(empty($_GET['tid'])) { ?>
  <div class="form-group">
      
      <div class="col-sm-6">
        <input type="text" class="form-control" value="<?php if(!empty($_GET['tid'])) { echo $_GET['tid']; } ?>" id="email" placeholder="Thread ID" name="tid" >
      </div>
    </div>
	<?php } ?>
    <div class="form-group">
      
      <div class="col-sm-6">
        <input type="text" class="form-control" value="<?php if(!empty($_GET['name'])) { echo $_GET['name']; } ?>" id="email" placeholder="Your Name" name="uname" >
      </div>
    </div>
    <div class="form-group">
    
      <div class="col-sm-6">          
        <input type="text" class="form-control" value="<?php if(!empty($_GET['phn'])) { echo $_GET['phn']; } ?>" id="pwd" placeholder="Phone Number" name="phn">
      </div>
    </div>
	<h4>Delivery Details</h4>
     <div class="form-group">
    
      <div class="col-sm-6">          
        <input type="text" class="form-control" value="<?php if(!empty($_GET['delto'])) { echo $_GET['delto']; } ?>" id="pwd" placeholder="Deliver To(Name)" name="delto">
      </div>
    </div>
	  <div class="form-group">
    
      <div class="col-sm-6">          
        <input type="text" class="form-control" value="<?php if(!empty($_GET['recno'])) { echo $_GET['recno']; } ?>"id="pwd" placeholder="Receiver's Number" name="recno">
      </div>
    </div>
	<div class="form-group">
    
      <div class="col-sm-6">          
        <input type="text" class="form-control" value="<?php if(!empty($_GET['deladd'])) { echo $_GET['deladd']; } ?>" id="pwd" placeholder="Deliver Street Address" name="deladd">
      </div>
    </div>
	<div class="form-group">
    
      <div class="col-sm-6">          
        <input type="text" class="form-control" value="<?php if(!empty($_GET['deladd1'])) { echo $_GET['deladd1']; } ?>" id="pwd" placeholder="Street Address Line 2" name="deladd1">
      </div>
    </div>
	<div class="form-group">
    
      <div class="col-sm-6">          
        <input type="date" class="form-control" value="<?php if(!empty($_GET['deldate'])) { echo $_GET['deldate']; } ?>" 			id="pwd" name="deldate">
      </div>
    </div>
	
	<h4>Occasion </h4>
	<div class="form-group">
    
      <div class="col-sm-6">          
        <input type="radio" value="birthday" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="birthday") echo "checked"; ?> >Birthday<br>
        <input type="radio" value="get_well_soon" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="get_well_soon") echo "checked"; ?> > Get Well Soon<br>
        <input type="radio" value="mothers_day" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="mothers_day") echo "checked"; ?>> Mother's Day<br>
        <input type="radio" value="love_u" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="love_u") echo "checked"; ?>> I love You<br>
        <input type="radio" value="congo" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="congo") echo "checked"; ?>> Congratulations<br>
        <input type="radio" value="think" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="think") echo "checked"; ?>> Thinking of You<br>
        <input type="radio" value="symp" name="occ" <?php if(!empty($_GET['occ']) && $_GET['occ']=="symp") echo "checked"; ?>> Sympathy<br>
      </div>
    </div>
	</div>
	<div class="col-sm-6">
	
	<h4>Colour of Flowers </h4>
	<div class="form-group">
    
      <div class="col-sm-6">   
	  <select class="form-control" name="fcol" id="fcol">
	  <option value="">Select Color</option>
	  <option value="red" <?php if(!empty($_GET['fcol']) && $_GET['fcol']=="red") echo "selected"; ?>>Red</option>
	  <option value="bc" <?php if(!empty($_GET['fcol']) && $_GET['fcol']=="bc") echo "selected"; ?>>Bright Colors</option>
	  <option value="sc" <?php if(!empty($_GET['fcol']) && $_GET['fcol']=="sc") echo "selected"; ?>>Soft Colors</option>
	  </select>
	  <?php if(!empty($_GET['fcol']) && $_GET['fcol']=="red") {
		echo '<img src="images/Flower3.png" id="im">';
	  }
	  else if(!empty($_GET['fcol']) && $_GET['fcol']=="sc") {
		echo '<img src="images/Flower2.png" id="im">';
		}
		  else if(!empty($_GET['fcol']) && $_GET['fcol']=="bc") {
		echo '<img src="images/Flower1.png" id="im">';
		}
		else {
			echo '<img src="" id="im">';
		}
	  ?>
	  <img src="" id="im">
	  </div>
	  </div>
	  <h4>Write Your Personal Message Here...</h4>
	  <div class="form-group">
    
      <div class="col-sm-6">   
	  <textarea placeholder="Write Your Personal Message Here..." rows=5 cols=40 name="msg"><?php if(!empty($_GET['msg'])) { echo $_GET['msg']; } ?> </textarea>
	  </div>
	  </div>
	
	  </div>
	  <?php if(empty($_GET)) { ?>
	   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
	<?php } else { ?>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
<a href="payment.php?tid=<?php echo $_GET['tid']; ?>" class="btn btn-primary">Proceed to payment</a>
<button class="btn btn-primary" data-clipboard-target="#ul" data-clipboard-action="copy">Copy Link</button>
<input type="text"  value="<?php echo $_SERVER['REQUEST_URI']; ?>" hidden>
<p id="ul" style="color:white"><?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></p>
 </div>
    </div>
<?php
}
?>
	  </div>
    
   
	</div>
	 <script>
	 
	 $(function(){
		new Clipboard('.btn');
	 });
	 
 
  </script>
  </form>
</div>

</body>
</html>