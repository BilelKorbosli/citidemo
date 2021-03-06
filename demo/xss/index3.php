<?php
$cookie_name = "sessionid";
$cookie_value = md5('admin');
header( "Set-Cookie: ".$cookie_name."=".$cookie_value.";" );
?>
<?php header( "X-Frame-Options: deny " );
      header( "Content-Security-Policy: frame-ancestors 'none'" );
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Marshmello [Case 1]</title>
		<link rel="stylesheet" href="style/font-awesome.min.css">
		<link href="style/bootstrap.min.css" rel="stylesheet">
		<link href="style/front.css" rel="stylesheet">
	</head>
	<body>

	  <div class="container">
	    <div class="row">
	      <div class="span4" style="margin-top: 250px;"></div>
	      <div class="span4"></div>
	    </div>

		<form role="search" action="" method="GET">
	    <div class="row">
	      <div class="col-xs-6">
	        <div class="input-group">
	          <input type="text" class="form-control" name="search" placeholder="Search">
	          <span class="input-group-btn">
	                  <button class="btn btn-primary" type="button"><i class="fa fa-microphone"></i></button>
	                </span>
	        </div>
	      </div>
	    </div>
	    <div class="btn-group-wrap">
	      <div class="btn-group">
	        <button type="submit" class="btn btn-primary" id="marshmello-search">Marshmello Search</button>
	      </div>
	    </div>
	    </form>

		<?php
			if (isset($_GET['search']) && !empty($_GET['search'])) {
				$search = $_GET['search'];
				echo "<h3>" . $search . " Not found</h3>";
			}
		?>
	</body>
</html>