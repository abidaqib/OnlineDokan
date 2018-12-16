<?php include('server.php')?>

<?php
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
	?>
<!Doctype html>
<head>
	
	<!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop " />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery.easing.min.js"></script>


</head>

<body>

<div class="" align="center">
                <ul>
                    <li> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal14">Add Admin</button>
			
                 <button type="button" onclick="window.location.href='orders.php'"  class="btn btn-info btn-lg" name="orders">Orders</button>
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal15">Add Service</button>
				
                    </li>
                
                

</ul>

</div>
<!-- Modal -->

<div class="modal fade" id="myModal14" role="dialog">
<div class="modal-dialog">
<form method="post" action="admin.php">
	<div class="modal-content">
        <div class="modal-header">
      
          <h4 class="modal-title">Add New Admin</h4>
        </div>
      
  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Name:</label>
<input type="text" class="form-control"  name="name" required>
</div>
</div>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Email:</label>
<input type="email" class="form-control"  name="email" required>
</div>
</div>
<div class="modal-body">
          <div class="form-group">
            <label for="usr">Number:</label>
<input type="text" class="form-control"  name="number" required>
</div>
</div>
  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Password:</label>
<input type="password" class="form-control"  name="password" required>
</div>
</div>

  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Confrom Password:</label>
<input type="password" class="form-control"  name="re_password" required>
</div>
</div>
 <div class="modal-footer">
<input type="submit" class="btn btn-default"  name="signUp" value="Sign Up">
</div>
</div>
</form>
</div>
</div>


<!-- Modal -->

<div class="modal fade" id="myModal15" role="dialog">
<div class="modal-dialog">
<form method="post" action="admin.php"  enctype="multipart/form-data">
	<div class="modal-content">
        <div class="modal-header">
      
          <h4 class="modal-title">Add New Service</h4>
        </div>
      
  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Type:</label>
<input type="text" class="form-control"  name="type">
</div>
</div>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Title:</label>
<input type="text" class="form-control"  name="title">
</div>
</div>
<div class="modal-body">
          <div class="form-group">
            <label for="usr">Description:</label>
<textarea class="form-control"  name="description" ></textarea>
</div>
</div>
  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Price:</label>
<input type="text" class="form-control"  name="price">
</div>
</div>

  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Image:</label>
<input type="file" class="form-control"  name="filenames">
</div>
</div>
 <div class="modal-footer">
<input type="submit" class="btn btn-default"  name="add" value="ADD">
</div>
</div>
</form>
</div>
</div>



<div class="">
    <div class="container">
      <br>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <?php
                $query="SELECT * FROM `services` ORDER BY sid DESC";
                $result=mysqli_query($db, $query);
                
                while($subjects=mysqli_fetch_row($result)){
                echo "<tr class='rem1'>
                    <td class='invert'>$subjects[1]</td>
                    <td class='invert-image'>
                        <img src='images/$subjects[4]' alt='' class='img-responsive' />
                    </td>
                    <td class='invert'>$subjects[3]</td> 
                    <td class='invert'>$subjects[2]</td>
                    <td class='invert'>$subjects[5]</td>
                </tr>";
}?>
            </table>
        </div>

    </div>
</div>
<br>
<div align="center">
	<form method="post" action="server.php">
                     <button  type="submit" class="btn btn-info btn-lg" name="logout">Logout</button>
         			</form>
                  
</div>

</body>
</html>