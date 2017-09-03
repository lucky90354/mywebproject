
<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" method="post" action="contact1.php">
			<div class="form-group">	
			<input type="text" class="form-control" id="name" name="name" placeholder="Name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
			</div>
			<div class="form-group">
			<textarea type="text" class="form-control" name="msg"  placeholder="Message" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>