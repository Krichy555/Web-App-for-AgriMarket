
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

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
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/plantain.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/maize.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/plantain2.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
		            <h2 class="text-success">Current Uploads</h2>
		            
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>

	        	<!-- for showing the general products limited by the id-->
	        	<div class="container py-5">
					<div class="row">
						<?php
							$conn=mysqli_connect('localhost', 'root', '','ecomm');
							if(!$conn){
								echo "Connection failed";
							}
						?>
						<?php 
							$query="SELECT * FROM products WHERE prostatus=1";
							$result=mysqli_query($conn, $query);
							while ($row= mysqli_fetch_array($result)) { ?>
								<div class="col-sm-3" style="margin-top: 0px; padding-top: 0px;">
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src="uploads/<?= $row['photo'] ?>" width='100%' height='230px' class='thumbnail'>
											<p align="center" class="card-text">
												<!--a href="#"><?php //echo $row['name'] ?><br></a-->
												<a href="inc/product-view.php? view=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a>
											</p>
										</div>
										<div align="center" class='box-footer'>
											<b><?php echo "GHS".number_format($row['price'], 2); ?></b>
											<a class="btn btn-success" href="cart-add-index.php? add=<?php echo $row['id'] ?>">Add to cart</a>
										</div>
									</div>
								</div>
						<?php } 
						?>

					</div>
				</div>

	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>