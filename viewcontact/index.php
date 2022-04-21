<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Computer Project Work - 2078/79</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <?php include'conn.php'; ?>
</head>
<body>
    <div class="header">
        <div class="intro">
            <center><h1>Yours Welcome!</h1>
            <h2>Final Year Project</h2></center>
        </div>
        <div class="navbar">
            <ul><center>
                <li><a href="../"><b>Home</b></a></li>

            </center></ul>
        </div>
    </div>


<!-- Header End With NavBar -->

	<div class="container">
	    <div class="row10">
	    	<?php
	    		$select = "SELECT * FROM message";
	    		$query = mysqli_query($conn,$select);
	    		$num = mysqli_num_rows($query);
	    		 if ($num != 0) {
                while($result = mysqli_fetch_array($query)) {
	    	?>
	    	<div class="row11">
	    	   <h1><?php echo $result['name']; ?></h1>
	    	   <h2><?php echo $result['email']; ?></h2>
	    	   <h4><?php echo $result['message']; ?></h4>
	        </div>
		    <?php }

		    }else{
		    	echo "No Feedback Found";
		    }
		    ?>
	    </div>
	</div>
