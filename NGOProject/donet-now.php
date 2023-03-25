<?php
include_once("header.php"); 
$amount = $_GET['amount'];
?>
<style>
.donet-now{
    width: 60%;
    height: auto;
    background-color: whitesmoke;
    box-shadow: black;
    box-shadow: 0px 2px 5px 0px rgb(84 74 84);
    padding-bottom: 20px;
    padding-top: 20px;
	}
</style>

<form style="margin-top:200px;">
	<h1 style="text-align:center; font-family: arial;">Payment Process</h1>

<div class="container donet-now" style="width: 60%;">
	<form action="controllors/donet-now.php" method="post">
		<!-- <p style="font-size:25px;">Profile</p> -->
		<div class="container">
			<div class="row">
			
			<div class="col-sm-6 col-md-6 col-lg-6">
			<label>Amount</label><br>
			<input type="text" name="name" value="<?php echo $amount;?>" class="form-control" readonly><br>
			</div><br>
			

			<div class="col-sm-6 col-md-6 col-lg-6">
			<label>Payment method</label>
			<select class="form-select" >
				<option>Select Your Payment Method</option>
				<option>Gpay</option>
				<option>Paytm</option>
				<option>Phonepe</option>
                <option>Debit/Credit Card</option>
			</select>

			</div>
			<?php if ($amount == 1500) { ?>
			<a href="qr.php" class="btn btn-danger btn-lg">Process your payment</a>
        
<?php } else if ($amount == 3500) {?>
	<a href="qr1.php" class="btn btn-danger btn-lg">Process your payment</a>        
<?php } elseif ($amount == 5500) {?>
    <a href="qr2.php" class="btn btn-danger btn-lg">Process your payment</a>
	
<?php } ?>
		</div>
		</div>
	</form>
</div>	
</form>


<?php
include_once("footer.php"); 
?>