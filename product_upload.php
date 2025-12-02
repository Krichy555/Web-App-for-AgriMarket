
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	<?php  
	
?>

<?php //include 'inc/add_cart.php'; ?>
	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        			if(isset($_SESSION['success'])){
	        				echo "
	        					<div class='alert alert-success'>
	        						".$_SESSION['success']."
	        					</div>
	        				";
	        				unset($_SESSION['success']);
	        			}
	        		?>
	        		
	        		<div class="card" style="height: 445px; overflow: auto; background: ;">
	        			<div class="card-title">
	        				<div class="card-body">
	        					<div class="col-sm">
	        						<form method="POST" action="inc/upload.php" enctype="multipart/form-data">
							     		<div class="col-sm-6" style="margin-top: ;">
							     			<div style="width: 80%">
							     				<h4 class="text-success" align="center">Upload product</h4>
							     				<label>Product Category </label><br>
												<select class="form-control" name="category" id="exampleFormControlSelect1" style="height: 40px;">
													<option>Select category</option>
													<?php
														$query=$conn->prepare("SELECT * FROM category");
										              	$query->execute();
											         	$result=$query->get_result();
											            foreach($result as $row){ ?>
											            	<option><?php echo $row['name']; ?></option>
										                <?php 
										              	}
                  										?>
                                            	</select>
                                            	<label>Product Name</label><br>
                                            	<input class="form-control py-4" id="inputusername" type="text" name="prodname" placeholder="" required style="height: 40px;" />
											</div>
							     			<label>Product details</label><br>
							     			<textarea name="description" style="overflow: hidden; width: 80%; height: 100px;" required="true"></textarea><br>

							     			<!--div style="margin: 0px;">
							     				<div class="aa" style="float: right; margin-left: 0px;">
							     					<label>Unit</label><br>
                                            		<select class="form-control" name="category" id="exampleFormControlSelect1" style="height: 40px; width: inherit;">
														<option>Select Unit</option>
										            	<option>Kg</option>
										            	<option>Bag(s)</option>
										            	<option>Baskets</option>
                                            		</select>
							     				</div>

							     				<div style="">
	                                            	<label>Quantity</label><br>
	                                            	<input class="form-control py-4" id="inputusername" type="number" name="prodname" placeholder="" required style="height: 40px; width: 20%;" />
							     				</div>
							     			</div-->

							     			<div style="width: 80%;">
							     				<label>Price(GHS)</label><br>
							     				<input class="form-control py-4" id="inputusername" type="text" name="price" placeholder="GHS:" required="true" style="height: 50px;" />
							     			</div>
							     		</div>
							     		<!--upload image-->
							     		<div class="col-sm-6">
							     			<div class="card-title"><h5 class="text-success">Product image</h5></div>
	        								<img src="img/noimage.jpg" id="uploadPreview" style="width: 300px; height: 300px;" /><br>
												<div align="">
													<input id="uploadImage" type="file" name="image[]" onchange="PreviewImage();" required="true" />
												</div>

												<div align="center">
													<button  class="btn btn-success" type="submit" name="submit">Uplod product</button>
												</div>
	        							</div>

							    	</form>
							    </div> 
	        				</div>
	        			</div>
	        		</div>
	        		

	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

	<script type="text/javascript">

	    function PreviewImage() {
	        var oFReader = new FileReader();
	        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

	        oFReader.onload = function (oFREvent) {
	            document.getElementById("uploadPreview").src = oFREvent.target.result;
	        };
	    };

	</script>

</body>
</html>