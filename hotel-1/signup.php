<?php include 'header.php';?>
<div class="container">

<h1 class="title">Sign Up</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	
		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Sign Up</h4>
			<form role="form" method="POST" action="input.php">
			<div class="form-group">	
			<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="username" placeholder="Enter username" primary>
			</div>
			<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="password">
			</div>
			<input type="date" class="form-control" name="dob" placeholder="Enter Date Of Birth">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" name="mobile" placeholder="Enter Mobile Number">
			</div>
			
			<div class="form-group">
			<textarea type="text" class="form-control" name="address"  placeholder="Address" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Submit</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>