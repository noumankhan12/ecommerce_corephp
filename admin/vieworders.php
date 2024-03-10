<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home_page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}

?>
<body>
<nav class="navbar bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>MY Store</h1></a>
  <span>
  <i class="fas fa-user-shield"></i>
  Hello,<?php echo $_SESSION['admin'];?>|
  <i class="fas-fa-sign-out-alt"></i>
  <a href="form/logout.php" class="text-decoration-none text-white">Logout|</a>
  <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
  </span>
  </div>
</nav>
        <div>
          <h2 class="text-center">ORDERS</h2>
        </div>
        
	<div class="container mt-5">
		<div class="row">
			
			<div class="col-lg-12">
				</div>
				<table class="table table-dark">
				  <thead>
				    <tr>
				      <th scope="col">Order ID</th>
				      <th scope="col">Customer name</th>
				      <th scope="col">Phone No</th>
				      <th scope="col">Address</th>
					  <th scope="col">Order Details</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
				  	$query="SELECT * FROM `order_manager` ORDER BY `Order_id` DESC";
				  	$user_result=mysqli_query($con,$query);
				  	while ($user_fetch=mysqli_fetch_assoc($user_result))
				  	 {	echo "
					  	<tr>
					      <td>$user_fetch[Order_id]</td>
					      <td>$user_fetch[Full_Name]</td>
					      <td>$user_fetch[Phone_No]</td>
					      <td>$user_fetch[Address]</td>
					      
					    <td>	

						<table class='table text-center table-dark'>
							<thead>
							<tr>
							<th scope='col'>Product Name</th>
					  		<th scope='col'>Price</th>
					  		<th scope='col'>Quantity</th>
							</tr>
							</thead>
							<tbody>
					    	";
						  $order_query = "SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_id]' ";
						$order_result=mysqli_query($con,$order_query);
						while ($order_fetch=mysqli_fetch_assoc($order_result)) {
							echo "
					  	<tr>
					      <td>$order_fetch[Item_Name]</td>
					      <td>$order_fetch[Price]</td>
					      <td>$order_fetch[Quantity]</td>
					      
					      
					    </tr>	
					    	";
						}
				
				
				echo"
				  	
				  </tbody>
				</table>
				</td>
				</tr>
				";
			}
			?>
				  </tbody>
				</table>
			</div>
		</div>
		
	</div>
    
</body>
</html>