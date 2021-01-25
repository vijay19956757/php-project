<!DOCTYPE html>
<html lang="en">
<head>
<title>Interior Home Interior Category Bootstrap Responsive Website Template | Home :: w3layouts </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Interior Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<link rel="stylesheet" href="css/swipebox.css"> <!-- gallery css -->

<!-- testimonials css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!--//fonts-->

</head>

<body>
	<?php include('header.php');
	    include('header.php');?>
            <?PHP
                $conn = mysqli_connect("localhost",'root','','katayani');
                    if($conn)
                    {
                    }
                    // $val = $_GET['id'];
                    switch ($val) {}
            ?>
    <div class="gallery" id="gallery">
	<div class="container">
	<h3 class="heading">Our <span>Gallery</span></h3>
		<div class="gallery_gds">
			<?PHP
                $sql = "SELECT * FROM gallery";
                $result  = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                  	{
                   		while ($row = mysqli_fetch_assoc($result) )
                    		{
            ?>
                <div class="col-md-3 gal-w3l">
			  		<div class="agileits-img">
				     	    <?PHP echo "<td> <img src='data:image;base64,".$row['eimg']."' class='main-image' alt='image'/> </td>"; ?>
                    </div>
                </div>
                  <?php
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
	</div>
</div>  
	<?php include('footer.php');?>
</body>
</html>