<?php include('server.php');

 $bu = $_SESSION['buy'];
 //echo $bu;
                

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="">
      
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
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



<div class="header-bot">
        <div class="container">
            <div class="col-md-3 header-left">
                <h1>
                    <a href="home.php"><img src="images/F_logo.jpg"></a>
                </h1>
            </div>
            <div class="col-md-6 Soft-header-middle">
                <form>
                    <div class="search">
                        <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    </div>
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                              <option value="null">ALL</option>
                        <option value="null">Bad</option>     
                        <option value="AX">Table</option>
                    </select>
                    </div>
                    <div class="sear-sub">
                        <input type="submit" value=" ">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="sear-sub">
                <ul>
                    <li> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log In</button>
                    </li>
               
                
                
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


<!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<form method="post" action="buy.php">
	<div class="modal-content">
        <div class="modal-header">
      
          <h4 class="modal-title">Admin For Login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Email:</label>
<input type="email" class="form-control"  name="email" required>
</div>
</div>
  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Password:</label>
<input type="password" class="form-control"  name="password" required>
</div>
</div>
 <div class="modal-footer">
<input type="submit" class="btn btn-default"  name="signIn" value="Log In">
</div>
</div>
</form>
</div>
</div>







<div class="product-easy">
<div class="container">

            <div class="resp-tabs-container">
                
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
<?php
                $query="SELECT * FROM `services` where sid =  $bu";
                $result=mysqli_query($db, $query);
                
                while($subjects=mysqli_fetch_row($result)){
                	
                                         echo"<img src='images/$subjects[4]' alt='' class='pro-image-front'>
                                        <img src='images/$subjects[4]' alt='' class='pro-image-back'>
                                        <div class='men-cart-pro'>
                                            <div class='inner-men-cart-pro'>
                                                <a data-toggle='modal' data-target='#myModal16' class='link-product-add-cart'>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='item-info-product ''>
                                        <h4><a href='single.html'>$subjects[2]</a></h4>
                                        <div class='info-product-price'>
                                            <span class='item_price'>$subjects[5]</span>
                                        </div>   
                                    </div>
                                
                                </div>
                           </div>
            </div>
            <h3>Discretion: </h3><br>
           <h4 style='bold'>$subjects[3]</h4>
   </div>

</div>    ";
             }
      ?>



<div class="modal fade" id="myModal16" role="dialog">
<div class="modal-dialog">
<form method="post" action="buy.php">
	<div class="modal-content">
        <div class="modal-header">
      
          <h4 class="modal-title">Buy</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Phone Number:</label>
<input type="text" class="form-control"  name="phone" required>
</div>
</div>
  <div class="modal-body">
          <div class="form-group">
            <label for="usr">Address:</label>
<input type="text" class="form-control"  name="address" required>
</div>
</div>
<div class="modal-body">
          <div class="form-group">
            <label for="usr">Credit Card No:</label>
<input type="text" class="form-control"  name="CNo" required>
</div>
</div>

 <div class="modal-footer">
<button  class="btn btn-default"  name="buyok" >Buy</button>
</div>
</div>
</form>
</div>
</div>

 
</body>
</html>